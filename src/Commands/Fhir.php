<?php

namespace LibreEHR\FHIR\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use LibreEHR\Core\Contracts\ProviderInterface;
use LibreEHR\Core\Emr\Eloquent\ProviderData;
use LibreEHR\Core\Emr\Repositories\ProviderRepository;
use LibreEHR\Core\Emr\Repositories\UserRepository;

class Fhir extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fhir {option}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync providers from all EHR databases into the provider value set';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $option = $this->argument('option');

        if ( $option == 'sync' ) {

            $this->info("Fetching Providers");
            // First get all current providers
            $providerRepository = new ProviderRepository();
            $providers = $providerRepository->fetchAll();

            $userRepository = new UserRepository();
            $ehrUsers = array();
            // for each DB key, find the providers
            $connections = Config::get('database.connections');
            foreach ( $connections as $connection => $params ) {
                if ( $connection != 'auth' &&
                    $params['driver'] == 'mysql' ) {
                    $this->info("Fetching Providers on {$connection}");
                    $userRepository->setConnection($connection);
                    $users = $userRepository->fetchProviders();
                    $this->info( "Result = {$users}" );
                    foreach ( $users as $user ) {

                        if ( $user instanceof ProviderInterface ) {

                            $this->info( "User {$user}" );
                            // See if this user is already in the provider list
                            if ( ($found = $this->arraySearch( $providers, $user, $userRepository )) !== false ) {
                                // The provider in the auth DB already exists, check to see if we need to update any fields
                                $update = false;
                                if ( $found instanceof ProviderInterface ) {

                                    if ( $found->getFirstName() != $user->getFirstName() ) {
                                        $found->setFirstName( $user->getFirstName() );
                                        $update = true;
                                    }

                                    if ( $found->getLastName() != $user->getLastName() ) {
                                        $found->setLastName( $user->getLastName() );
                                        $update = true;
                                    }

                                    if ( $found->getEmailAddress() != $user->getEmailAddress() ) {
                                        $found->setEmailAddress( $user->getEmailAddress() );
                                        $update = true;
                                    }

                                    if ( $found->getAddress() != $user->getAddress() ) {
                                        $found->setAddress( $user->getAddress() );
                                        $update = true;
                                    }

                                    if ( $found->getTown() != $user->getTown() ) {
                                        $found->setTown( $user->getTown() );
                                        $update = true;
                                    }

                                    if ( $found->getName() != $user->getName() ) {
                                        $found->setName( $user->getName() );
                                        $update = true;
                                    }
                                }

                                if ( $update ) {
                                    $found->save();
                                }
                            } else {
                                // Not found, create a new one
                                $this->info( "Creating new provider on {$userRepository->getConnection()} named {$user->getFirstName()} {$user->getLastName()}" );
                                $newProvider = new ProviderData();
                                $newProvider->setFirstName( $user->getFirstName() );
                                $newProvider->setLastName( $user->getLastName() );
                                $newProvider->setEmailAddress( $user->getEmailAddress() );
                                $newProvider->setAddress( $user->getAddress() );
                                $newProvider->setTown( $user->getTown() );
                                $newProvider->setName( $user->getName() );
                                $newProvider->setConnectionKey( $userRepository->getConnection() );
                                $newProvider->setEmrId( $user->getEmrId() );
                                $newProvider->save();
                            }
                        }
                    }
                }
            }
        }
    }

    protected function arraySearch( $providers, ProviderInterface $provider, UserRepository $userRepository )
    {
        $found = false;
        foreach ( $providers as $p ) {
            if ( $p instanceof ProviderInterface ) {
                if ( $p->getConnectionKey() == $userRepository->getConnection() &&
                    $p->getEmrId() == $provider->getEmrId() ) {
                    $this->info( "Found matching provider" );
                    $found = $p;
                    break;
                }
            }
        }

        return $found;
    }
}

<?php

namespace LibreEHR\FHIR\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use LibreEHR\Core\Contracts\ProviderInterface;
use LibreEHR\Core\Emr\Eloquent\ProviderData;
use LibreEHR\Core\Emr\Repositories\PatientRepository;
use LibreEHR\Core\Emr\Repositories\ProviderRepository;
use LibreEHR\Core\Emr\Repositories\UserRepository;
use LibreEHR\FHIR\Http\Controllers\Auth\AuthModel\User;

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

        if ( $option == 'clean-all' ) {

            $this->info("Cleaning ALL Patients and Users");

            $connections = Config::get('database.connections');

            foreach ( $connections as $connection => $params ) {
                if ( $connection != 'auth' &&
                    $params[ 'driver' ] == 'mysql' ) {

                    DB::connection( $connection )->delete( 'DELETE FROM libreehr_postcalendar_events WHERE pc_catid = ?', [ 9 ] );
                    DB::connection( $connection )->table('patient_data')->truncate();
                    DB::connection( $connection )->table('mi2_notifications')->truncate();
                    DB::connection( $connection )->table('mi2_notification_queue')->truncate();
                    DB::connection( $connection )->table('patient_tracker')->truncate();
                    DB::connection( $connection )->table('patient_tracker_element')->truncate();
                    DB::connection( $connection )->table('pnotes')->truncate();
                    DB::connection( $connection )->table('lists')->truncate();
                    DB::connection( $connection )->table('history_data')->truncate();
                    DB::connection( $connection )->table('insurance_data')->truncate();

                } else if ( $connection == 'auth' &&
                    $params[ 'driver' ] == 'mysql' ) {

                    DB::connection( $connection )->table('users')->truncate();
                    DB::connection( $connection )->table('signup_data')->truncate();
                    DB::connection( $connection )->table('oauth_access_tokens')->truncate();
                    DB::connection( $connection )->table('oauth_refresh_tokens')->truncate();
                    DB::connection( $connection )->table('password_resets')->truncate();
                }
            }

        } else if ( $option == 'sync-patients' ) {

            $this->info("Fetching Patients");

            $connections = Config::get('database.connections');
            $patientRepository = new PatientRepository();
            foreach ( $connections as $connection => $params ) {
                if ( $connection != 'auth' &&
                    $params[ 'driver' ] == 'mysql'
                ) {
                    $patientRepository->setConnection( $connection );
                    $patients = $patientRepository->fetchByStatus( 'inactive' );
                    foreach ( $patients as $patient ) {
                        $ehr_pid = $patient->getPid();
                        $users = DB::select('SELECT * FROM users WHERE ehr_pid = ? AND connection = ?', [ $ehr_pid, $connection ] );
                        $foundUser = null;
                        foreach ( $users as $user ) {
                            $foundUser = $user;
                            break;
                        }

                        if ( $foundUser ) {
                            $this->info( "Found User: {$foundUser->id}" );
                            $deleted = DB::delete( 'DELETE FROM users WHERE id = ?', [ $foundUser->id ] );
                            $deleted = DB::delete( 'DELETE FROM signup_data WHERE user_id = ?', [ $foundUser->id ] );
                            $deleted = DB::delete( 'DELETE FROM oauth_access_tokens WHERE user_id = ?', [ $foundUser->id ] );
                        }
                    }
                }
            }

        } else if ( $option == 'sync-providers' ) {

            $this->info("Fetching Providers");
            // First get all current providershistory | grep artisan

            $providerRepository = new ProviderRepository();
            $providers = $providerRepository->fetchAll();

            $userRepository = new UserRepository();
            // for each DB key, find the providers
            $connections = Config::get('database.connections');
            foreach ( $connections as $connection => $params ) {
                if ( $connection != 'auth' &&
                    $params['driver'] == 'mysql' ) {
                    $this->info("Fetching Providers on {$connection}");
                    $userRepository->setConnection( $connection );
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


            $this->info( "Cleaning up inactive users" );
            // Clean up deleted users
            $providerRepository = new ProviderRepository();
            $providers = $providerRepository->fetchAll();
            $userRepository = new UserRepository();
            foreach ( $connections as $connection => $params ) {
                if ( $connection != 'auth' &&
                    $params['driver'] == 'mysql' ) {

                    $this->info( "Checking {$connection}" );
                    $userRepository->setConnection( $connection );
                    $users = $userRepository->fetchProviders( true );
                    foreach ( $users as $user ) {

                        $this->info( "Checking {$user->getId()} which is active({$user->active})" );
                        $found = false;
                        foreach ( $providers as $provider ) {

                            if ( $provider instanceof ProviderInterface ) {

                                $this->info( "...against {$provider->getEmrId()}" );
                                if ( $provider->getConnectionKey() == $connection &&
                                    $provider->getEmrId() == $user->getId() &&
                                    $user->active == '1'
                                ) {
                                    $found = true;
                                    break;
                                }
                            }
                        }

                        if ( !$found ) {
                            $provider->delete();
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

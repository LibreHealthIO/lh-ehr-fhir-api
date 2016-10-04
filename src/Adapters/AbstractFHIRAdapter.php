<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Support\Facades\Auth;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use LibreEHR\Core\Contracts\RepositoryInterface;

abstract class AbstractFHIRAdapter implements BaseAdapterInterface
{
    protected $repository = null;

    public function __construct( RepositoryInterface $repositoryInterface )
    {
        $this->repository = $repositoryInterface;
    }

    public function setConnection( $conn )
    {
        return $this->repository->setConnection( $conn );
    }

    protected function parseUrl($url)
    {
        $array = explode('&', $url);
        foreach ($array as $ln) {

            if( strpos($ln, 'date') !== false ) {
                // If it's a date, then it's a special case we leaave blank because we can have multiples
                $data[] = substr($ln, strpos($ln, "=") + 1);
            } else {
                // Otherwise, save the key/value pair
                $parts = explode( "=", $ln );
                $data[$parts[0]] = $parts[1];
            }
        }
        return $data;
    }
}
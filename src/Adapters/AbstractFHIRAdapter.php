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
}
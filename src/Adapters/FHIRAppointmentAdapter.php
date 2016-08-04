<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Http\Request;
use LibreEHR\Core\Contracts\BaseAdapterInterface ;


class FHIRAppointmentAdapter implements BaseAdapterInterface
{
    protected $repository = null;

    public function __construct( BaseAdapterInterface $repositoryInterface )
    {
        $this->repository = $repositoryInterface;
    }

    public function retrieve( $id )
    {

    }
    public function store( Request $request )
    {

    }
    public function collectionToOutput()
    {

    }
}
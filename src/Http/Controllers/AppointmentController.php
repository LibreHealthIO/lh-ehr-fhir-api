<?php

namespace LibreEHR\FHIR\Http\Controllers;

use LibreEHR\Core\Contracts\BaseAdapterInterface;

class AppointmentController extends AbstractController
{
    protected $appointmentAdapter = null;

    public function __construct( BaseAdapterInterface $appointmentAdapter )
    {
        $this->appointmentAdapter = $appointmentAdapter;
    }

    public function index()
    {
        //return $this->appointmentAdapter->collectionToOutput();
        $this->appointmentAdapter->jsonToInterface(1);
    }

}


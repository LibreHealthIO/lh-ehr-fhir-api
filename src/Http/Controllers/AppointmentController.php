<?php

namespace LibreEHR\FHIR\Http\Controllers;

use LibreEHR\Core\Contracts\BaseAdapterInterface;
use Illuminate\Http\Request;

class AppointmentController extends AbstractController
{
    protected $appointmentAdapter = null;

    public function __construct( BaseAdapterInterface $appointmentAdapter )
    {
        $this->appointmentAdapter = $appointmentAdapter;
    }

    public function index($patientID = null, Request $request = null)
    {
        return $this->appointmentAdapter->collectionAppointments($patientID, $request);
    }

}


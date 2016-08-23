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

    public function index(Request $request = null)
    {
        return $this->appointmentAdapter->collectionToOutput($request);
    }

    public function post(Request $request)
    {
        return $this->appointmentAdapter->store($request);
    }
    
    public function put(Request $request)
    {
        return $this->appointmentAdapter->updateStatus($request);
    }

}


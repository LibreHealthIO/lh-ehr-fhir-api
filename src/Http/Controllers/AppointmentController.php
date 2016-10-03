<?php

namespace LibreEHR\FHIR\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use Illuminate\Http\Request;

class AppointmentController extends AbstractController
{
    public function index(Request $request = null)
    {
        $this->init();
        return $this->adapter->collectionToOutput($request);
    }

    public function post(Request $request)
    {
        $this->init();
        return $this->adapter->store($request);
    }
    
    public function put(Request $request)
    {
        $this->init();
        return $this->adapter->updateStatus($request);
    }

}


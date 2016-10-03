<?php

namespace LibreEHR\FHIR\Http\Controllers;

use App\Http\Requests;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use Illuminate\Http\Request;

class PatientController extends AbstractController
{

    public function index(Request $request = null)
    {
        $this->init();
        return $this->adapter->collectionToOutput($request);
    }

    public function show($id = null)
    {
        $this->init();
        return $this->adapter->showPatient($id);
    }

    public function post(Request $request)
    {
        $this->init();
        return $this->adapter->store($request);
    }

    public function update( Request $request)
    {
        $this->init();
        return $this->adapter->update($request);
    }

    public function destroy($id)
    {
        $this->init();
        return $this->adapter->removePatient($id);
    }
}


<?php

namespace LibreEHR\FHIR\Http\Controllers;

use App\Http\Requests;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use Illuminate\Http\Request;

class PatientController extends AbstractController
{

    protected $patientAdapter = null;

    public function __construct( BaseAdapterInterface $patientAdapter )
    {
        $this->patientAdapter = $patientAdapter;
    }

    public function index(Request $request = null)
    {
        return $this->patientAdapter->collectionToOutput($request);
    }

    public function show($id = null)
    {
        return $this->patientAdapter->showPatient($id);
    }

    public function post(Request $request)
    {
        return $this->patientAdapter->store($request);
    }


    public function update( Request $request)
    {
        return $this->patientAdapter->update($request);
    }

    public function destroy($id)
    {
        return $this->patientAdapter->removePatient($id);
    }
}


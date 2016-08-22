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

    public function post(Request $request)
    {
        return $this->patientAdapter->store($request);
    }
}


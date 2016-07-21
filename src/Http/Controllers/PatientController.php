<?php

namespace LibreEHR\FHIR\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LibreEHR\Core\Contracts\PatientAdapterInterface;
use LibreEHR\Core\Contracts\PatientFinderInterface;
use LibreEHR\Core\Contracts\PatientRepositoryInterface;

class PatientController extends AbstractController
{
    public function __construct( PatientAdapterInterface $patientAdapter )
    {
        $this->adapter = $patientAdapter;
    }
}


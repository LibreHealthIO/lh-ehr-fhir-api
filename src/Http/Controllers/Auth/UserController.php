<?php

namespace LibreEHR\FHIR\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use LibreEHR\Core\Emr\Criteria\ByPid;
use LibreEHR\Core\Emr\Finders\Finder;
use LibreEHR\Core\Emr\Finders\PatientFinder;
use LibreEHR\FHIR\Http\Controllers\Auth\AuthModel\User;
use Illuminate\Http\Response;
use LibreEHR\Core\Emr\Repositories\PatientRepository;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        if ( $user ) {
            $data['user'] = $user;

            $patient = null;
            if ( $user->connection &&
                $user->ehr_pid ) {
                $finder = new Finder();
                $finder->pushCriteria( new ByPid( $user->ehr_pid ) );
                $patientRepo = new PatientRepository( $finder, $user->connection );
                $patient = $patientRepo->find();
            }

            $status = User::STATUS_NEW;
            if ( $patient ) {
                // If we have a ehr_id and a DB connection,
                // // get the reg_status from the EHR
                if ( $patient->getStatus() ) {
                    $status =  $patient->getStatus();
                }
            }

            $user->status = $status;
            $user->save();

            $data['user']['signup'] = $user->signup;

            $host = $_SERVER['HTTP_HOST'];

            $data['endpoint'] = [
                'name' => 'api',
                'host' => $host,
                'protocol' => 'https',
                'path' =>  '/client/v1'
            ];

            return $data;

        } else {
            return new Response([
                'accountRegistered' => 0,
                'status'  => 'Fail',
                'message' => 'No patients found',
            ]);
        }
    }
}

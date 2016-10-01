<?php

namespace LibreEHR\FHIR\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use LibreEHR\FHIR\Http\Controllers\Auth\AuthModel\User;
use Illuminate\Http\Response;
use LibreEHR\Core\Emr\Repositories\PatientRepository;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        if ($user) {
            $patientRepo = new PatientRepository();
            $patientRepo->setConnection($user->connection);
            $patients = $patientRepo->fetchAll();
            $data['user'] = $user;
            $data['user_signup_data'] = $user->signup;

            $endpoints[0] = [
                'name' => 'user',
                'host' => 'gponline.com',
                'protocol' => 'https',
                'path' =>  '/user'
            ];

            foreach ($patients as $patient) {
                if ($patient->getStatus() == 'registered') {
                    $endpoints[] = [
                        'name' => 'user',
                        'host' => 'gponline.com',
                        'protocol' => 'https',
                        'path' => '/fhir/'.$user->connection.'/Patient/'.$patient->id
                    ];
                } else {
                    $endpoints[] = [
                        'name' => 'user',
                        'host' => 'gponline.com',
                        'protocol' => 'https',
                        'path' =>  '/register'
                    ];
                }
            }

            $data['endpoints'] = $endpoints;
            return $data;

        } else {
            return new Response([
                'accountRegistered' => 0,
                'status'  => 'Fail',
                'message' => 'No user with id='.$id. ' found',
            ]);
        }
    }
}

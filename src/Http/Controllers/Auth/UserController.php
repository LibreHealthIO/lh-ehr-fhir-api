<?php

namespace LibreEHR\FHIR\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use LibreEHR\FHIR\Http\Controllers\Auth\AuthModel\User;
use Illuminate\Http\Response;

class UserController extends Controller
{

    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            $data['user'] = $user;
            $data['user_signup_data'] = $user->signup;
            return $data;
        } else {
            return new Response([
                'accountRegistered' => 0,
                'status'  => 'Fail',
                'message' => 'No user with id='.$id. ' found',
            ]);
        }
    }

    public function index()
    {
        $user= auth()->user();
        // $user = $this->request->user();
        if ( $user ) {
            $data['user'] = $user;
            $data['signup_data'] = $user->signup;
            return $user;
        } else {
            return new Response([
                'accountRegistered' => 0,
                'status'  => 'Fail'
            ]);
        }
    }
}

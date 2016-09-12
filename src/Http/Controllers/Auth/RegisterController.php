<?php

namespace LibreEHR\FHIR\Http\Controllers\Auth;

use GuzzleHttp\Psr7\Request;
use LibreEHR\FHIR\Http\Controllers\Auth\AuthModel\User;
use LibreEHR\FHIR\Http\Controllers\Auth\AuthModel\Signup;
use Validator;
use App\Http\Controllers\Controller;
use LibreEHR\FHIR\Http\Controllers\Auth\Traits\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['firstname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Create a new user profile after a valid registration.
     *
     * @param  array  $data
     * @param  int    $userId
     * @return User
     */
    protected function createSignup(array $data, $userId)
    {
        return Signup::create([
            'user_id' => $userId,
            'firstname' => $data['firstname'],
            'surname' => $data['surname'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'mobile_number' => $data['mobile_number'],
        ]);
    }
}

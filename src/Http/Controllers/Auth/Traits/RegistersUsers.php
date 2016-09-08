<?php

namespace LibreEHR\FHIR\Http\Controllers\Auth\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Response;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
//        return view('auth.register');
        return 'showRegistrationForm action';
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);
        
        if (!empty($validator->errors()->messages())) {
            return new Response([
                'status'  => 'FAIL',
                'message' => 'Fail to save user',
                'Errors'  =>  $validator->errors()
            ], 500);
        } else {
            try {
                $this->guard()->login($this->create($request->all()));
                return new Response([
                    'status' => 'OK',
                    'message' => 'User Registered',
                ], 201);
            } catch (\Illuminate\Database\QueryException $ex) {
                return new Response([
                    'status'  => 'Fail',
                    'message' => 'Fail registering',
                    'Errors ' =>  $ex->getMessage()
                ]);

            }
        }
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }
}

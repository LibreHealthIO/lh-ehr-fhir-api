<?php

namespace LibreEHR\FHIR\Http\Controllers\Auth\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LibreEHR\FHIR\Http\Controllers\Auth\AuthModel\User;
use LibreEHR\FHIR\Http\Controllers\Auth\AuthModel\Signup;
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
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'firstname'      => 'required|max:255',
            'surname'        => 'required|max:255',
            'email'          => 'required|email|max:255|unique:users',
            'mobile_number'  => 'required|min:10',
            'password'       => 'required|min:6',
            'gender'         => 'required'
        ]);

        if (!empty($validator->errors()->messages())) {
            return new Response([
                'accountRegistered' => 0,
                'status'  => 'FAIL',
                'message' => 'Fail to save user',
                'Errors'  =>  $validator->errors()
            ], 500);
        } else {
            try {
                $this->guard()->login($this->create($data));
                $user = new User();
                $collection = $user->all();
                $userId = $collection->last()->id;
                $this->createSignup($data, $userId);
                return new Response([
                    'accountRegistered' => 1,
                    'status' => 'OK',
                    'message' => 'User signup data saved',
                ], 201);
            } catch (\Illuminate\Database\QueryException $ex) {
                return new Response([
                    'accountRegistered' => 0,
                    'status'  => 'Fail',
                    'message' => 'Fail saving singup data',
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

    /**
     * Update user signup instance.
     *
     * @param Request $request
     * @return Signup
     */

    public function signupUpdate(Request $request)
    {
        $this->middleware('auth:api');
        $data = $request->all();
        $validator = Validator::make($data, [
            'firstname'      => 'sometimes|required|max:255',
            'surname'        => 'sometimes|required|max:255',
            'email'          => 'sometimes|required|email|max:255|unique:users',
            'mobile_number'  => 'sometimes|min:10|unique:signup_data',
            'password'       => 'sometimes|required|min:6',
            'gender'         => 'sometimes|required',
            'user_id'        => 'required|integer',
        ]);

        if (!empty($validator->errors()->messages())) {
            return new Response([
                'status'  => 'FAIL',
                'message' => 'Fail to update user signup data',
                'Errors'  =>  $validator->errors()
            ], 500);
        } else {
            try {
                unset($data['_method']);
                $signupModel = Signup::find($data['user_id']);
                foreach ($data as $k => $ln) {
                    $signupModel->$k = $ln;
                }
                $signupModel->save();
                return new Response([
                    'status' => 'OK',
                    'message' => 'User signup data updated',
                ], 201);
            } catch (\Illuminate\Database\QueryException $ex) {
                return new Response([
                    'status'  => 'Fail',
                    'message' => 'Fail updating',
                    'Errors ' =>  $ex->getMessage()
                ]);

            }
        }
    }
}

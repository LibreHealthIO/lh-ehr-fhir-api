<?php

namespace LibreEHR\FHIR\Http\Controllers\Auth\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use LibreEHR\FHIR\Http\Controllers\Auth\AuthModel\Signup;

trait SendsPasswordResetEmails
{
    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendResetLinkEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $request->only('email'),
            $this->resetNotifier()
        );

        if ($response === Password::RESET_LINK_SENT) {
            return trans($response);
        }

        // If an error was returned by the password broker, we will get this message
        // translated so we can notify a user of the problem. We'll redirect back
        // to where the users came from so they can attempt this process again.
        return back()->withErrors(
            ['email' => trans($response)]
        );
    }

    /**
     * Get the Closure which is used to build the password reset notification.
     *
     * @return \Closure
     */
    protected function resetNotifier()
    {
        //
    }

    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        return Password::broker();
    }

    public function recoverUsernameByPhone(Request $request)
    {
        $userId = Signup::where('mobile_number', $request->all('mobile_number'))->value('user_id');
        $creadentials = User::find($userId);
        return $creadentials->email;
    }
}

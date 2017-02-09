<?php

namespace LibreEHR\FHIR\Http\Controllers\Auth\AuthModel;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use LibreEHR\FHIR\Utilities\OxygenSms;


class User extends Authenticatable
{

    const STATUS_NEW = 'new';
    const STATUS_PENDING = 'pending';
    const STATUS_ACTIVE = 'active';

    use HasApiTokens, Notifiable;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function signup()
    {
        return $this->hasOne('LibreEHR\FHIR\Http\Controllers\Auth\AuthModel\Signup');
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        // Send SMS
        $url = url('password/reset', $token);
        $sms = "Reset password using this link: $url";
        $oxygen = new OxygenSms();
        $signup = Signup::where('user_id', $this->id )->first();
        $oxygen->send( $sms, $signup->mobile_number );

        $this->notify(new ResetPasswordNotification($token));
    }

}

<?php

namespace LibreEHR\FHIR\Http\Controllers\Auth\AuthModel;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

}

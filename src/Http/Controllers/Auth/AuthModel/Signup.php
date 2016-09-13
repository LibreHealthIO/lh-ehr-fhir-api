<?php

namespace LibreEHR\FHIR\Http\Controllers\Auth\AuthModel;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    use HasApiTokens, Notifiable;

    public $timestamps = false;

    protected $connection = 'auth';

    protected $table = 'signup_data';

    protected $primaryKey = 'user_id';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'firstname', 'surname', 'gender', 'email', 'mobile_number'
    ];

    public function user()
    {
        return $this->belongsTo('LibreEHR\FHIR\Http\Controllers\Auth\AuthModel\User');
    }
}

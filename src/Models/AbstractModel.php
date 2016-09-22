<?php

namespace LibreEHR\FHIR\Models;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model
{
    protected $connection = 'auth';
}
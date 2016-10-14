<?php

namespace LibreEHR\FHIR\Models;

use LibreEHR\Core\Contracts\ValueSetInterface;

class Option implements ValueSetInterface
{
    protected $name;
    protected $value;

    public function __construct( $name, $value )
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCode()
    {
        return $this->value;
    }

}
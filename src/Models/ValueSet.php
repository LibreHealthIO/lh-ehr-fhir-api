<?php

namespace LibreEHR\FHIR\Models;


class ValueSet extends AbstractModel
{
    protected $table = 'value_sets';

    public function getValueSetUrl()
    {
        return \URL::current();
    }

    public function getValueSetName()
    {
        return $this->resource;
    }

    public function getValueSetDescription()
    {
        return $this->description;
    }
}

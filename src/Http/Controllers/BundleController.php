<?php

namespace LibreEHR\FHIR\Http\Controllers;

use LibreEHR\Core\Contracts\BundleAdapterInterface;

class BundleController extends AbstractController
{
    public function __construct( BundleAdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }
}

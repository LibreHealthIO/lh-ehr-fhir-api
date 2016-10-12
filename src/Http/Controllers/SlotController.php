<?php
namespace LibreEHR\FHIR\Http\Controllers;

use LibreEHR\Core\Contracts\BaseAdapterInterface;
use Illuminate\Http\Request;

class SlotController extends AbstractController
{
    public function index(Request $request = null)
    {
        $this->init();
        return $this->adapter->getSlots($request);
    }
}
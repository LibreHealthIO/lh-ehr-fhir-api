<?php

namespace LibreEHR\FHIR\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use Illuminate\Http\Request;

class AppointmentController extends AbstractController
{
    public function index(Request $request = null)
    {
        $this->init();
        return $this->adapter->collectionToOutput($request);
    }

    public function showGroup()
    {
        $user = $this->init();
        return $this->adapter->showGroup( $user->ehr_pid );
    }

    public function post(Request $request)
    {
        $this->init();
        return $this->adapter->store($request);
    }
    
    public function put(Request $request, $id = null )
    {
        $this->init();
        return $this->adapter->update($request, $id);
    }

    public function destroy($id)
    {
        $this->init();
        return $this->adapter->remove($id);
    }


}


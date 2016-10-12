<?php

namespace LibreEHR\FHIR\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PatientController extends AbstractController
{

    public function index( $id = null)
    {
        $user = $this->init();
        if ( $id != null ) {
            return $this->adapter->showPatient($id);
        } else {
            $id = $user->ehr_pid;
            return $this->adapter->showPatient($id);
        }
    }

    /**
     * @return mixed
     *
     * return a bundle con
     */
    public function showGroup()
    {
        $user = $this->init();
        return $this->adapter->showGroup( $user->ehr_pid );
    }

    public function show($id = null)
    {
        $user = $this->init();
        if ( $id == null &&
            $user->ehr_pid ) {
            // If no ID is provided, display the logged-in user's Patient
            $id = $user->ehr_pid;
        }
        try {
            return $this->adapter->showPatient($id);
        } catch ( NotFoundHttpException $e ) {
            return new Response([
                'status'  => 'Fail',
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function post(Request $request)
    {
        $this->init();
        return $this->adapter->store($request);
    }

    public function update( Request $request, $id )
    {
        $this->init();
        return $this->adapter->update($request, $id);
    }

    public function destroy($id)
    {
        $this->init();
        return $this->adapter->removePatient($id);
    }
}


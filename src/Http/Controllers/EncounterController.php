<?php

namespace LibreEHR\FHIR\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LibreEHR\Core\Contracts\PatientAdapterInterface;
use LibreEHR\Core\Contracts\PatientFinderInterface;
use LibreEHR\Core\Contracts\PatientRepositoryInterface;

class EncounterController extends Controller
{
    protected $encounterRepository = null;
    protected $encounterAdapter = null;

    public function __construct( PatientRepositoryInterface $patientRepository, PatientAdapterInterface $patientAdapter )
    {
        $this->patientRepository = $patientRepository;
        $this->patientAdapter = $patientAdapter;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->patientAdapter->toOutput( $this->patientRepository->fetchAll() );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store( Request $request )
    {
        $data = $request->getContent();
        $patientInterface = $this->patientAdapter->toPatientInterface( $data );
        $this->patientRepository->create( $patientInterface );
        // TODO return response code
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return $this->patientAdapter->toOutput( $this->patientRepository->find()->byPid( $id ) );
    }

}

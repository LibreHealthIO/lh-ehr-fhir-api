<?php

namespace LibreEHR\FHIR\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LibreEHR\Core\Contracts\BaseAdapterInterface;

class AbstractController extends Controller
{
    protected $adapter = null;

    public function __construct( BaseAdapterInterface $patientAdapter )
    {
        $this->adapter = $patientAdapter;
    }

    public function init()
    {
        // TODO this should be a ConnectionManager passed into me
        $user = Auth::user();
        if ( $user->connection ) {
            $this->adapter->setConnection($user->connection);
        } else {
            $this->adapter->setConnection('mysql');
        }

        return $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $this->init();
        return $this->adapter->collectionToOutput();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $this->init();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store( Request $request )
    {
        $this->init();
        return $this->adapter->store( $request );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $this->init();
        return $this->adapter->retrieve( $id );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update( Request $request )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

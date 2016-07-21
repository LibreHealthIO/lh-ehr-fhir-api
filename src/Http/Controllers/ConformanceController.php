<?php

namespace LibreEHR\FHIR\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPFHIRGenerated\FHIRDomainResource\FHIRConformance;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRNarrative;
use PHPFHIRGenerated\FHIRElement\FHIRNarrativeStatus;
use PHPFHIRGenerated\FHIRElement\FHIRString;

class ConformanceController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
//        $conformance = new FHIRConformance();
//
//        $id = new FHIRId();
//        $id->setValue( 'openemr' );
//        $conformance->setId( $id );
//
//        $text = new FHIRNarrative();
//        $status = new FHIRNarrativeStatus();
//        $status->setValue( "human" );
//        $text->setStatus( $status );
//        $text->setDiv( "<div>!-- Snipped for Brevity --></div>" );
//        $conformance->setText( $text );
//
//        $url = new FHIRString();
//        $url->setValue( "http://emr_api:8888/fhir" );
//        $conformance->setUrl( $url );
//
//        $version = new FHIRString();
//        $version->setValue( "1.0" );
//        $conformance->setVersion( $version );
//
//        $name = new FHIRString();
//        $name->setValue( "OpenEMR FHIR Server" );
//        $conformance->setName( $name );
//
//        return $conformance->xmlSerialize();

        return file_get_contents( __DIR__."/../../../files/conformance.xml" );
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
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
    public function update($id)
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

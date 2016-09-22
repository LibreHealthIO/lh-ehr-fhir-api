<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Http\Request;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use LibreEHR\Core\Contracts\AppointmentInterface;

use LibreEHR\Core\Contracts\ValueSetInterface;
use LibreEHR\FHIR\Models\ValueSet;
use PHPFHIRGenerated\FHIRDomainResource\FHIRSlot;
use PHPFHIRGenerated\FHIRDomainResource\FHIRValueSet;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
//	Reference
use PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetContains;
use PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetExpansion;
use PHPFHIRGenerated\PHPFHIRResponseParser;
use Illuminate\Support\Facades\App;


class FHIRValueSetAdapter extends AbstractFHIRAdapter implements BaseAdapterInterface
{

    /**
     * @param $id ID identifying resource
     * @return string
     *
     * Takes a resource ID and returns a FHIR JSON or XML string
     * in response
     */
    public function retrieve( $id )
    {
        // First get the models using the resource specified in the database
        // using the appropriate connection
        $valueSet = ValueSet::find($id);
        $resource = $valueSet->resource;
        $connection = $valueSet->connection;
        $repositoryClass = ucfirst($resource) . 'Repository';
        $repository = new $repositoryClass();
        $repository->setConnection($connection);
        $models = $repository->fetchAll();

        // Create the value set and expansion to fill with the model data
        $FHIRValueSet = new FHIRValueSet();
        $FHIRExpansion = new FHIRValueSetExpansion();

        foreach ( $models as $model ) {
            if ( $model instanceof ValueSetInterface ) {

                // Models that implement ValueSetInterface are
                // capable of exporting the name (for display field), code

                // TODO @leo implement the Provider and Pharmacy models
                // So that they conform to the ValueSetInterface
                // and properly fill the ValueSet->expansion->contains[]
                $FHIRContains = new FHIRValueSetContains();
                $display = new FHIRString();
                $display->setValue( $model->getName() );
                $FHIRContains->setDisplay( $display );
                $FHIRExpansion->addContains( $FHIRContains );
            }
        }

        $FHIRValueSet->setExpansion( $FHIRExpansion );


    }


    /**
     * @param Request $request
     * @return FHIRPatient
     */
    public function store( Request $request )
    {


    }

    /**
     * @param PatientInterface $patientInterface
     * @return PatientInterface
     */
    public function storeInterface( AppointmentInterface $appointmentInterface)
    {

    }

    /**
     * @return array
     */
    public function collectionToOutput()
    {
        $collection = $this->repository->getSlots();
        $output = array();
        foreach ( $collection as $slot ) {
            if ( $slot instanceof AppointmentInterface ) {
                $fhirSlot = $this->interfaceToModel( $slot );
                $output[]= $fhirSlot;
            }
        }

        return $output;
    }

    /**
     * @param string $data
     * @return PatientInterface
     *
     * Takes a FHIR post string and returns a PatientInterface
     */
    public function jsonToInterface( $data )
    {


    }

    public function modelToInterface( AppointmentInterface $appointment  )
    {


    }

    /**
     * @param AppointmentInterface $appointment
     * @return FHIRAppointment
     */
    public function interfaceToModel( $slot )
    {
        $fhirSlot = new FHIRSlot();


        $start = new FHIRInstant();
        $value = new FHIRString();
        $value->setValue( $slot['startTime'] );
        $start->setValue( $value );
        $fhirSlot->setStart($start);

        $end = new FHIRInstant();
        $value = new FHIRString();
        $value->setValue( $slot['endTime'] );
        $end->setValue( $value );
        $fhirSlot->setEnd($end);

        $status = new FHIRCode();
        $value = new FHIRString();
        $value->setValue( $slot['status'] );
        $status->setValue( $value );
        $fhirSlot->setFreeBusyType($status);

        $schedule = new FHIRReference();
        $reference 	 = new FHIRString();
        $reference->setValue( '/fhir/Schedule' );
        $display 	 = new FHIRString();
        $display->setValue( 'Schedule' );
        $schedule->setReference( $reference );
        $schedule->setDisplay( $display );
        $fhirSlot->setSchedule($schedule);

        return $fhirSlot;

    }
}
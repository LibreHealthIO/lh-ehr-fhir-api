<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Http\Request;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use LibreEHR\Core\Contracts\AppointmentInterface;

use PHPFHIRGenerated\FHIRDomainResource\FHIRSlot;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
//	Reference
use PHPFHIRGenerated\PHPFHIRResponseParser;
use Illuminate\Support\Facades\App;


class FHIRSlotAdapter extends AbstractFHIRAdapter implements BaseAdapterInterface
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
     * @param ArrayAccess $collection
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
    public function interfaceToModel( AppointmentInterface $appointment )
    {
        $fhirSlot = new FHIRSlot();

        $identifier = new FHIRIdentifier();
        $use = new FHIRIdentifierUse();
        $use->setValue( "usual" );
        $identifier->setUse( $use );
        $value = new FHIRString();
        $value->setValue( $appointment->getId() );
        $identifier->setValue( $value );
        $fhirSlot->addIdentifier( $identifier );

        $start = new FHIRInstant();
        $value = new FHIRString();
        $value->setValue( $appointment->getStartTime() );
        $start->setValue( $value );
        $fhirSlot->setStart($start);

        $end = new FHIRInstant();
        $value = new FHIRString();
        $value->setValue( $appointment->getEndTime() );
        $end->setValue( $value );
        $fhirSlot->setEnd($end);

        $status = new FHIRCode();
        $value = new FHIRString();
        $value->setValue( 'free' );
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
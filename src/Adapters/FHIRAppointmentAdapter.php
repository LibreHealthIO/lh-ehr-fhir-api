<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Http\Request;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use LibreEHR\Core\Contracts\AppointmentInterface;
use LibreEHR\Core\Emr\Criteria\ByPid;
use PHPFHIRGenerated\FHIRDomainResource\FHIRAppointment;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\PHPFHIRResponseParser;
use Illuminate\Support\Facades\App;

class FHIRAppointmentAdapter extends AbstractFHIRAdapter implements BaseAdapterInterface
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
        $this->repository->finder()->pushCriteria( new ByPid( $id ) );
        $patientInterface = $this->repository->find();
        return $this->interfaceToModel( $patientInterface );
    }

    /**
     * @param Request $request
     * @return FHIRPatient
     */
    public function store( Request $request )
    {
        // TODO add validation
        $data = $request->getContent();
        $interface = $this->jsonToInterface( $data );
        $storedInterface = $this->storeInterface( $interface );
        return $this->interfaceToModel( $storedInterface );
    }

    /**
     * @param PatientInterface $patientInterface
     * @return PatientInterface
     */
    public function storeInterface( PatientInterface $patientInterface )
    {
        $patientInterface = $this->repository->create( $patientInterface );
        return $patientInterface;
    }

    /**
     * @param ArrayAccess $collection
     * @return array
     */
    public function collectionToOutput()
    {
        $collection = $this->repository->fetchAll();
        $output = array();
        foreach ( $collection as $appointment ) {

            if ( $appointment instanceof AppointmentInterface ) {
                $fhirAppointment = $this->interfaceToModel( $appointment );
                $output[]= $fhirAppointment;
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
        $parser = new \PHPFHIRGenerated\PHPFHIRResponseParser();
        $fhirPatient = $parser->parse( $data );
        if ( is_a( $fhirPatient, 'FHIRPatient' ) ) {
            return $this->modelToInterface( $fhirPatient );
        } else {
            // Error, the Resource does not match, expecting a Patient,
            // // but got something else.
        }


    }

    public function modelToInterface( FHIRAppointment $fhirAppointment )
    {
        $data_zzz = '{"resourceType":"Appointment","identifier":[{"use":"usual","value":1}],"start":"10:00:00","end":"10:15:00"}';
        $parser = new PHPFHIRResponseParser();
        $appointment = $parser->parse($data_zzz);
        $start = $appointment->getStart()->getValue();

        return $start;
    }

    /**
     * @param AppointmentInterface $appointment
     * @return FHIRAppointment
     */
    public function interfaceToModel( AppointmentInterface $appointment )
    {
        $fhirAppointment = new FHIRAppointment();

        $identifier = new FHIRIdentifier();
        $use = new FHIRIdentifierUse();
        $use->setValue( "usual" );
        $identifier->setUse( $use );
        $value = new FHIRString();
        $value->setValue( $appointment->getId() );
        $identifier->setValue( $value );
        $fhirAppointment->addIdentifier( $identifier );

        $start = new FHIRInstant();
        $value = new FHIRString();
        $value->setValue( $appointment->getStartTime() );
        $start->setValue( $value );
        $fhirAppointment->setStart($start);

        $end = new FHIRInstant();
        $value = new FHIRString();
        $value->setValue( $appointment->getEndTime() );
        $end->setValue( $value );
        $fhirAppointment->setEnd($end);

        return $fhirAppointment;
    }
}
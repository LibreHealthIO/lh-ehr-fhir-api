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
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;

use PHPFHIRGenerated\PHPFHIRResponseParser;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRResource\FHIRBundle;
use PHPFHIRGenerated\FHIRResourceContainer;
use PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleEntry;
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
     * @return FHIRAppointment
     */
    public function updateStatus( Request $request )
    {

        $data = $request->all();
        if(!isset($data['status']) || !isset($data['id'])) {
            return json_encode(array('error' => 'no arguments'));
        }
        // TODO add validation
        $storedInterface = $this->requestToInterface( $data );

        return $this->interfaceToModel( $storedInterface );
    }

    /**
     * @param string $data
     * @return AppointmentInterface
     *
     * Takes a FHIR post string and returns a AppointmentInterface
     */
    public function requestToInterface( $data )
    {

        $appointmentInterface = $this->repository->update($data['id'], $data['status']);

        return $appointmentInterface;
    }

    /**
     * @param Request $request
     * @return FHIRAppointment
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
     * @param AppointmentInterface $appointmentInterface
     * @return AppointmentInterface
     */
    public function storeInterface( AppointmentInterface $appointmentInterface )
    {
        $appointmentInterface = $this->repository->create( $appointmentInterface );
        return $appointmentInterface;
    }

    /**
     * @param Request $request
     * @return FHIRBundle $bundle
     */
    public function collectionToOutput(Request $request = null)
    {
        $data = $request->all();
        $collection = $this->repository->getAppointmentsByParam($data);

        $bundle = new FHIRBundle;
        $count = 0;
        foreach ( $collection as $appointment ) {

            if ( $appointment instanceof AppointmentInterface ) {
                $fhirAppointment = $this->interfaceToModel( $appointment );
                $resourceContainer = new FHIRResourceContainer;
                $resourceContainer->setAppointment($fhirAppointment);
                $bundleEntry = new FHIRBundleEntry();
                $bundleEntry->setResource($resourceContainer);
                $bundle->addEntry($bundleEntry);

                $count++;
            }
        }
        if(empty($count)) {
            return json_encode(
                array(
                    'message' => 'No appointments found for patient with id ' . $data['patient'],
                    'status_code' => '404'
                ));
        }

        return $bundle;
    }

    /**
     * @param string $data
     * @return AppointmentInterface
     *
     * Takes a FHIR post string and returns a AppointmentInterface
     */
    public function jsonToInterface( $data )
    {
        $data_test = '{"resourceType":"Appointment","identifier":[{"use":"usual","value":1}],"start":"10:00:00","end":"10:15:00"}';

        $parser = new PHPFHIRResponseParser();
        $fhirAppointment = $parser->parse( $data_test );
        if ( $fhirAppointment instanceof FHIRAppointment ) {
            return $this->modelToInterface( $fhirAppointment );
        } else {
            // Error, the Resource does not match, expecting a Appointment,
            // // but got something else.
            echo 'Error, the Resource does not match, expecting a Appointment';
        }
    }

    public function modelToInterface( FHIRAppointment $fhirAppointment )
    {
        $appointmentInterface = App::make('LibreEHR\Core\Contracts\AppointmentInterface');
        if ($appointmentInterface instanceof AppointmentInterface) {

            $start = $fhirAppointment->getStart()->getValue();
            $appointmentInterface->setStartTime( $start );

            $end = $fhirAppointment->getEnd()->getValue();
            $appointmentInterface->setEndTime( $end );

        }

        return $appointmentInterface;
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

        $status = new FHIRCode();
        $value = new FHIRString();
        $value->setValue( $appointment->getPcApptStatus() );
        $status->setValue( $value );
        $fhirAppointment->setStatus($status);

        $minutesDuration = new FHIRPositiveInt();
        $minutesDuration->setValue( $appointment->getPcDuration() );
        $fhirAppointment->setMinutesDuration($minutesDuration);

        $serviceCategory = new FHIRCodeableConcept;
        $value = new FHIRString();
        $value->setValue( $appointment->getServiceType()  );
        $serviceCategory->setText($value);
        $fhirAppointment->setType($serviceCategory);

        return $fhirAppointment;
    }
}
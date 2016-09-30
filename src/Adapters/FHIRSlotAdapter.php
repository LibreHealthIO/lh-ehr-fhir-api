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
     * @param $startDate string Search for Schedule resources that have a period that contains this date specified
     * @return string
     *
     * Returns a FHIR JSON or XML string
     * in response
     */
    public function getSlots(Request $request)
    {

        if (!empty($request->server->get('QUERY_STRING'))) {
            $data = $this->parseUrl($request->server->get('QUERY_STRING'));
            $slotBusy = $this->repository->getSlots($data);
        } else {
            $data['startDate'] = date('Y-m-d');
                $slotBusy = $this->repository->getSlots($data);
        }

        $output = array();
            foreach ( $slotBusy as $slot ) {
                $fhirSlot = $this->interfaceToModel( $slot );
                $output[]= $fhirSlot;
            }
            return $output;


        //return $fhirSchedule;
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
     * @param Request $request
     * @return array
     */
    public function collectionToOutput(Request $request = null)
    {

        if (!empty($request->server->get('QUERY_STRING'))) {
            $data = $this->parseUrl($request->server->get('QUERY_STRING'));
            $collection = $this->repository->getAppointmentsByParam($data);
        } else {
            $collection = $this->repository->getSlots();
        }

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

    private function parseUrl($url)
    {
        $array = explode('&', $url);
        foreach ($array as $ln) {
            if (strpos($ln, 'patient') !== false) {
                $data['provider'] = substr($ln, strpos($ln, "=") + 1);
            } else {
                $data[] = substr($ln, strpos($ln, "=") + 1);
            }
        }
        return $data;
    }
}
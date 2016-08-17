<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Http\Request;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use LibreEHR\Core\Contracts\AppointmentInterface;

use PHPFHIRGenerated\FHIRDomainResource\FHIRSchedule;
use PHPFHIRGenerated\FHIRElement\FHIRPeriod;
use PHPFHIRGenerated\FHIRElement\FHIRDateTime;


class FHIRScheduleAdapter extends AbstractFHIRAdapter implements BaseAdapterInterface
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
     * @param $id ID identifying resource
     * @return string
     *
     * Returns a FHIR JSON or XML string
     * in response
     */
    public function getSchedule($date)
    {
        $weekend = array('Sat', 'Sun');
        $schedule_start = '08';
        $schedule_end = '17';

        if(!$date) {
            $date = date('Y-m-d');
        }
        $start_str = $date . ' ' . $schedule_start. ':00:00';
        $end_str = $date . ' ' . $schedule_end. ':00:00';
        $date_arr = explode('-', $date);
        $mk_time = mktime(0, 0, 0, $date_arr[1], $date_arr[2], $date_arr[0]);
        $day = date('D', $mk_time);

        $fhirSchedule = new FHIRSchedule();
        if(!in_array($day, $weekend)) {

            $planningHorizon =	new FHIRPeriod();
            $dateTimeStart = new FHIRDateTime();
            $dateTimeStart->setValue($start_str);
            $planningHorizon->setStart($dateTimeStart);
            $dateTimeEnd = new FHIRDateTime();
            $dateTimeEnd->setValue($end_str);
            $planningHorizon->setEnd($dateTimeEnd);
            $fhirSchedule->setPlanningHorizon($planningHorizon);
        }
        return $fhirSchedule;
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

    public function modelToInterface( FHIRAppointment $fhirAppointment )
    {

    }

    /**
     * @param AppointmentInterface $appointment
     * @return FHIRAppointment
     */
    public function interfaceToModel( AppointmentInterface $appointment )
    {

    }
}
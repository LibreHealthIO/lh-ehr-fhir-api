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
    public function retrieve($id)
    {
    }

    /**
     * @param $date string Search for Schedule resources that have a period that contains this date specified
     * @return string
     *
     * Returns a FHIR JSON or XML string
     * in response
     */
    public function getSchedule($date)
    {
        $weekend = array('Sat', 'Sun');
        $scheduleStart = '08:00:00';
        $scheduleEnd = '17:00:00';

        if (!$date) {
            $date = date('Y-m-d');
        }
        $startStr = $date . ' ' . $scheduleStart;
        $endStr = $date . ' ' . $scheduleEnd;
        $dateArr = explode('-', $date);
        $mkTime = mktime(0, 0, 0, $dateArr[1], $dateArr[2], $dateArr[0]);
        $day = date('D', $mkTime);

        $fhirSchedule = new FHIRSchedule();
        if (!in_array($day, $weekend)) {
            $planningHorizon = new FHIRPeriod();
            $dateTimeStart = new FHIRDateTime();
            $dateTimeStart->setValue($startStr);
            $planningHorizon->setStart($dateTimeStart);
            $dateTimeEnd = new FHIRDateTime();
            $dateTimeEnd->setValue($endStr);
            $planningHorizon->setEnd($dateTimeEnd);
            $fhirSchedule->setPlanningHorizon($planningHorizon);
        }
        return $fhirSchedule;
    }

    /**
     * @param Request $request
     * @return FHIRPatient
     */
    public function store(Request $request)
    {
    }

    /**
     * @param PatientInterface $patientInterface
     * @return PatientInterface
     */
    public function storeInterface(AppointmentInterface $appointmentInterface)
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
    public function jsonToInterface($data)
    {
    }

    public function modelToInterface(FHIRAppointment $fhirAppointment)
    {
    }

    /**
     * @param AppointmentInterface $appointment
     * @return FHIRAppointment
     */
    public function interfaceToModel(AppointmentInterface $appointment)
    {
    }
}

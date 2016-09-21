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
    public function retrieve($id)
    {
    }

    /**
     * @param $startDate string Search for Schedule resources that have a period that contains this date specified
     * @return string
     *
     * Returns a FHIR JSON or XML string
     * in response
     */
    public function getSlots($startDate)
    {

        $weekend = array('Sat', 'Sun');
        if (!$startDate) {
            $startDate = date('Y-m-d');
        }

        $dateArr = explode('-', $startDate);
        $mkTime = mktime(0, 0, 0, $dateArr[1], $dateArr[2], $dateArr[0]);
        $day = date('D', $mkTime);

        if (!in_array($day, $weekend)) {
            $slotBusy = $this->repository->getSlots($startDate);

            $output = array();
            foreach ($slotBusy as $slot) {
                $fhirSlot = $this->interfaceToModel($slot);
                $output[]= $fhirSlot;
            }

            return $output;

        }
    }

    /**
     * @param Request $request
     * @return FHIRPatient
     */
    public function store(Request $request)
    {
    }

    /**
     * @param AppointmentInterface $appointmentInterface
     * @return AppointmentInterface
     */
    public function storeInterface(AppointmentInterface $appointmentInterface)
    {
    }

    /**
     * @return array
     */
    public function collectionToOutput()
    {
        $collection = $this->repository->getSlots();
        $output = array();
        foreach ($collection as $slot) {
            if ($slot instanceof AppointmentInterface) {
                $fhirSlot = $this->interfaceToModel($slot);
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
    public function jsonToInterface($data)
    {
    }

    public function modelToInterface(AppointmentInterface $appointment)
    {
    }

    /**
     * @param AppointmentInterface $appointment
     * @return FHIRAppointment
     */
    public function interfaceToModel($slot)
    {
        $fhirSlot = new FHIRSlot();
        $start = new FHIRInstant();
        $value = new FHIRString();
        $value->setValue($slot['startTime']);
        $start->setValue($value);
        $fhirSlot->setStart($start);

        $end = new FHIRInstant();
        $value = new FHIRString();
        $value->setValue($slot['endTime']);
        $end->setValue($value);
        $fhirSlot->setEnd($end);

        $status = new FHIRCode();
        $value = new FHIRString();
        $value->setValue($slot['status']);
        $status->setValue($value);
        $fhirSlot->setFreeBusyType($status);

        $schedule = new FHIRReference();
        $reference = new FHIRString();
        $reference->setValue('/fhir/Schedule');
        $display = new FHIRString();
        $display->setValue('Schedule');
        $schedule->setReference($reference);
        $schedule->setDisplay($display);
        $fhirSlot->setSchedule($schedule);

        return $fhirSlot;
    }
}

<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Http\Request;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use LibreEHR\Core\Contracts\AppointmentInterface;

use LibreEHR\Core\Emr\Repositories\ProviderRepository;
use PHPFHIRGenerated\FHIRDomainResource\FHIRSlot;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use Illuminate\Http\Response;
use PHPFHIRGenerated\FHIRElement\FHIRMeta;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRResource\FHIRBundle;
use PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleEntry;
use PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleLink;
use PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleResponse;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;
use LibreEHR\FHIR\Utilities\UUIDClass;
use PHPFHIRGenerated\FHIRResourceContainer;
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
            $collection = $this->repository->getSlots($data);
        } else {
            $data['startDate'] = date('Y-m-d');
            $collection = $this->repository->getSlots($data);
        }


        $bundle = new FHIRBundle;
        $bundleId = UUIDClass::v4();
        $currentDate = date('Y-m-d H:i:s');
        $count = 0;
        foreach ($collection as $slot) {
//            if ($slot instanceof AppointmentInterface) {
                $fhirAppointment = $this->interfaceToModel($slot);
                $resourceContainer = new FHIRResourceContainer;
                $resourceContainer->setAppointment($fhirAppointment);
                $bundleEntry = new FHIRBundleEntry();
                $fullUrl = new FHIRUri();
                $slotUrl = $request->url() . '/' . $bundleId;
                $fullUrl->setValue($slotUrl);
                $bundleEntry->setFullUrl($fullUrl);
                $bundleEntry->setResource($resourceContainer);
                $response = new FHIRBundleResponse;
                $location = new FHIRUri;
                $location->setValue('Slot/15/_history/1');
                $response->setLocation($location);
                $lastModified = new FHIRInstant();
                $lastModified->setValue($currentDate);
                $response->setLastModified($lastModified);
                $bundleEntry->setResponse($response);
                $bundle->addEntry($bundleEntry);

                $count++;
//            }
        }

        $meta = new FHIRMeta;
        $lastUpdated = new FHIRInstant();
        $lastUpdated->setValue($currentDate);
        $meta->setLastUpdated($lastUpdated);
        $bundle->setMeta($meta);

        $id = new FHIRId;
        $id->setValue($bundleId);
        $bundle->setId($id);

        $link = new FHIRBundleLink;
        $relation = new FHIRString;
        $relation->setValue('self');
        $link->relation = $relation;
        $fullUrl = $request->fullUrl();
        $url = new FHIRUri;
        $url->setValue($fullUrl);
        $link->url = $url;
        $bundle->addLink($link);

        $total = new FHIRUnsignedInt;
        $total->setValue($count);
        $bundle->total = $total;

        $type = new FHIRCode;
        $type->setValue('searchset');
        $bundle->type = $type;


        return $bundle;






        $output = array();
        if (!empty($slotBusy)) {
            foreach ( $slotBusy as $slot ) {
                $fhirSlot = $this->interfaceToModel($slot);
                $output[]= $fhirSlot;
            }
            return $output;
        } else {
            return new Response([
                'accountRegistered' => 0,
                'status'  => 'Fail',
                'message' => 'No slots found',
            ]);
        }


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


        $startTime = new FHIRInstant();
        $value = new FHIRString();
        $value->setValue( $slot['timestamp'] );
        $startTime->setValue( $value );
        $fhirSlot->setStart($startTime);

        $endTime = new FHIRInstant();
        $value = new FHIRString();
        $value->setValue( $this->getSlotEndTime($slot['timestamp'], $slot['duration']));
        $endTime->setValue( $value );
        $fhirSlot->setEnd($endTime);

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

    private function getSlotEndTime($start, $duration) {
        return $start + (int)$duration*60;
    }
}
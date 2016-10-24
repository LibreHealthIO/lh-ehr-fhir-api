<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use LibreEHR\Core\Contracts\AppointmentInterface;
use LibreEHR\Core\Emr\Criteria\ByPid;
use LibreEHR\FHIR\Utilities\UUIDClass;
use PHPFHIRGenerated\FHIRDomainResource\FHIRAppointment;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse;
use PHPFHIRGenerated\FHIRElement\FHIRParticipantRequired;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
use LibreEHR\Core\Emr\Repositories\PatientRepository;
use LibreEHR\Core\Emr\Repositories\ProviderRepository;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept;
use PHPFHIRGenerated\FHIRElement\FHIRMeta;
use PHPFHIRGenerated\PHPFHIRResponseParser;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRExtension;
use PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt;
use PHPFHIRGenerated\FHIRElement\FHIRPositiveInt;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRResource\FHIRBundle;
use PHPFHIRGenerated\FHIRResourceContainer;
use PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleEntry;
use PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleLink;
use PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleResponse;
use Illuminate\Support\Facades\App;
use PHPFHIRGenerated\FHIRResource\FHIRAppointment\FHIRAppointmentParticipant;
use Validator;

use PHPFHIRGenerated\FHIRDomainResource\FHIROperationOutcome;

class FHIRAppointmentAdapter extends AbstractFHIRAdapter implements BaseAdapterInterface
{

    private $pcMultiple = 0;

    /**
     * @param $id ID identifying resource
     * @return string
     *
     * Takes a resource ID and returns a FHIR JSON or XML string
     * in response
     */
    public function retrieve($id)
    {
        $this->repository->finder()->pushCriteria(new ByPid($id));
        $patientInterface = $this->repository->find();
        return $this->interfaceToModel($patientInterface);
    }

    /**
     * @param Request $request
     * @return FHIRAppointment
     */
    public function update( Request $request, $id = null )
    {
        $data = $request->json()->all();
        if( $id == null ) {
            if (!isset($data['id'])) {
                return json_encode(array('error' => 'no ID argument'));
            } else {
                $id = $data['id'];
            }
        }
        $storedInterface = $this->requestToInterface($data,$id);

        return $this->interfaceToModel( $storedInterface );
    }

    /**
     * @param $id
     * @return FHIRAppointment
     */
    public function remove($id)
    {
        return $this->repository->delete($id);
    }

    /**
     * @param $groupId
     * @return FHIRBundle
     *
     * Return a bundle of all patients in my group
     */
    public function showGroup( $groupId )
    {
        $collection = $this->repository->getAppointmentsByParam( ['groupId' => $groupId ] );
        return $this->buildBundle( $collection );
    }

    /**
     * @param string $data
     * @return AppointmentInterface
     *
     * Takes a FHIR post string and returns a AppointmentInterface
     */
    public function requestToInterface($data,$id)
    {

        $appointmentInterface = $this->repository->update($id, $data);

        return $appointmentInterface;
    }

    /**
     * @param Request $request
     * @return FHIRAppointment
     */
    public function store(Request $request)
    {

        // TODO add validation

        $data = $request->getContent();

        $interface = $this->jsonToInterface($data);
        $storedInterface = $this->storeInterface($interface);
        return $this->interfaceToModel($storedInterface);
    }

    /**
     * @param AppointmentInterface $appointmentInterface
     * @return AppointmentInterface
     */
    public function storeInterface(AppointmentInterface $appointmentInterface)
    {
        $appointmentInterface = $this->repository->create($appointmentInterface);
        return $appointmentInterface;
    }

    public function buildBundle( $collection )
    {
        $bundle = new FHIRBundle;
        $bundleId = UUIDClass::v4();
        $currentDate = date('Y-m-d H:i:s');
        $count = 0;
        foreach ($collection as $appointment) {
            if ($appointment instanceof AppointmentInterface) {
                $fhirAppointment = $this->interfaceToModel($appointment);
                $resourceContainer = new FHIRResourceContainer;
                $resourceContainer->setAppointment($fhirAppointment);
                $bundleEntry = new FHIRBundleEntry();
                $fullUrl = new FHIRUri();
                $appointmentUrl = $_SERVER['HTTP_HOST'] . '/' . $bundleId;
                $fullUrl->setValue($appointmentUrl);
                $bundleEntry->setFullUrl($fullUrl);
                $bundleEntry->setResource($resourceContainer);
                $response = new FHIRBundleResponse;
                $location = new FHIRUri;
                $location->setValue('Appointment/15/_history/1');
                $response->setLocation($location);
                $lastModified = new FHIRInstant();
                $lastModified->setValue($currentDate);
                $response->setLastModified($lastModified);
                $bundleEntry->setResponse($response);
                $bundle->addEntry($bundleEntry);

                $count++;
            }
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
        $fullUrl = $_SERVER['HTTP_HOST'];
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
    }

    /**
     * @param Request $request
     * @return FHIRBundle $bundle
     */
    public function collectionToOutput(Request $request = null)
    {
        $user = Auth::user();
        $data = $this->parseUrl($request->server->get('QUERY_STRING'));
        if ( !isset($data['patient']) ) {
            $data['patient'] = $user->ehr_pid;
        }

        if ($this->checkPatientGroup($data, $user->ehr_pid)) {
            $collection = $this->repository->getAppointmentsByParam($data);
        } else {
            $operationOutcome = new FHIROperationOutcome();
            $errorText = new FHIRString();
            $errorText->setValue('Unauthorized');
            $operationOutcome->addIssue($errorText);
            return $operationOutcome;
        }

//        else {
//              Never get all appointments (should be configurable)
//            $collection = $this->repository->fetchAll();
//        }

        $bundle = $this->buildBundle( $collection );

        return $bundle;
    }


    /**
     * @param string $data
     * @return AppointmentInterface
     *
     * Takes a FHIR post string and returns a AppointmentInterface
     */
    public function jsonToInterface($data)
    {
        $parser = new PHPFHIRResponseParser();
        $fhirAppointment = $parser->parse($data);
        if ($fhirAppointment instanceof FHIRAppointment) {
            return $this->modelToInterface($fhirAppointment);
        } else {
            // Error, the Resource does not match, expecting a Appointment,
            // // but got something else.
            echo 'Error, the Resource does not match, expecting a Appointment';
        }
    }

    public function modelToInterface(FHIRAppointment $fhirAppointment)
    {
        $appointmentInterface = App::make('LibreEHR\Core\Contracts\AppointmentInterface');
        if ($appointmentInterface instanceof AppointmentInterface) {

            $start = $fhirAppointment->getStart()->getValue();
            $appointmentInterface->setStartTime($start);

            $end = $fhirAppointment->getEnd()->getValue();
            $appointmentInterface->setEndTime($end);

            $appointmentInterface->setPcEventDate($start);
            $appointmentInterface->setPcEndDate($end);

            $appointmentInterface->setPcMultiple($this->pcMultiple);

//            $duration = $this->countDuration($start, $end);
            $duration = $this->repository->getGlobalCalendarInterval()*60;
            $appointmentInterface->setPcDuration($duration);



            $description = $fhirAppointment->getDescription()->getValue();
            $appointmentInterface->setDescription($description);

            $status = $fhirAppointment->getStatus()->getValue();
            $appointmentInterface->setPcApptStatus($status);

            $extensions = $fhirAppointment->getExtension();
            foreach ($extensions as $extension) {
                $url = $extension->getUrl();
                if (strpos($url, "vidyo-portal-data") !== false) {
                    $x2s = $extension->getExtension();
                    $location = [];
                    foreach ($x2s as $x2) {
                        $url2 = $x2->getUrl();
                        switch ($url2) {
                            case "#portal-uri":
                                $portalUri = $x2->getValueString();
                                $location['portalUri'] = $portalUri;
                                break;
                            case "#room-key":
                                $roomKey = $x2->getValueString();
                                $location['roomKey'] = $roomKey;
                                break;
                            case "#pin":
                                $pin = $x2->getValueString();
                                $location['pin'] = $pin;
                                break;
                            case "#provider-id":
                                $providerId = $x2->getValueString();
                                $appointmentInterface->setProviderId( $providerId->getValue() );
                                break;
                            case "#patient-id":
                                $patientId = $x2->getValueString();
                                $appointmentInterface->setPatientId($patientId->getValue());
                                break;
                        }
                    }
                    $appointmentInterface->setLocation(json_encode($location, true));

                    //Set required data for showing Appointments in LibreEhr calendar.
                    $appointmentInterface->setPcTitle("Established Patient");
                    $appointmentInterface->setPcTime(time());
                    $appointmentInterface->setPcInformant(1);
                    $appointmentInterface->setPcCatid(9);
                    $appointmentInterface->setpcEventStatus(1);
                }
            }
        }

        return $appointmentInterface;
    }

    /**
     * @param AppointmentInterface $appointment
     * @return FHIRAppointment
     */
    public function interfaceToModel(AppointmentInterface $appointment)
    {
        $fhirAppointment = new FHIRAppointment();

        /*$participant = new FHIRAppointmentParticipant;


        $actor = new FHIRReference();
        $reference = new FHIRString();
        $reference->setValue('Patient/'.$appointment->getPatientId());
        $patientmRepo = new PatientRepository();
        $patient = $patientmRepo->get($appointment->getPatientId());
        $display = new FHIRString();
        $display->setValue($patient->getFirstName() .' '.$patient->getLastName());

        $actor->setDisplay($display);
        $actor->setReference($reference);
        $actor = new FHIRReference();
        $reference = new FHIRString();
        $reference->setValue('Provider/'.$appointment->getProviderId());
        $participant->addType($actor);

        $providerRepo = new ProviderRepository();
        $provider = $providerRepo->get($appointment->getProviderId());
        $display = new FHIRString();
        $display->setValue($provider->getFirstName() .' '.$provider->getLastName());
        $actor->setDisplay($display);
        $actor->setReference($reference);
        $participant->addType($actor);

        $required = new FHIRString();
        $required->setValue('required');
        $participant->setRequired($required);

        $status = new FHIRString();
        $status->setValue($appointment->getPcApptStatus());
        $participant->setStatus($status);

        $fhirAppointment->addParticipant($participant);*/

        $id = new FHIRId;
        $id->setValue($appointment->getId());
        $fhirAppointment->setId($id);

        $start = new FHIRInstant();
        $value = new FHIRString();
        $value->setValue($appointment->getStartTime());
        $start->setValue($value);
        $fhirAppointment->setStart($start);

        $end = new FHIRInstant();
        $value = new FHIRString();
        $value->setValue($appointment->getEndTime());
        $end->setValue($value);
        $fhirAppointment->setEnd($end);

        $duration = new FHIRString();
        $duration->setValue($appointment->getPcDuration()/60);
        $fhirAppointment->setMinutesDuration($duration);

        $status = new FHIRCode();
        $value = new FHIRString();
        $value->setValue($appointment->getPcApptStatus());
        $status->setValue($value);
        $fhirAppointment->setStatus($status);

        $extension = new FHIRExtension;
        $extension1 = new FHIRExtension;
        $extension2 = new FHIRExtension;
        $extension3 = new FHIRExtension;
        $extension4 = new FHIRExtension;

        $loc = json_decode( $appointment->getLocation() );
        if ( $loc ) {
            $extension->setUrl(\URL::to('/fhir') . "/extension/vidyo-portal-data");
            $extension1->setUrl('#portal-uri');
            $value = new FHIRString();
            $value->setValue($loc->portalUri);
            $extension1->setValueString($value);
            $extension2->setUrl('#room-key');
            $value = new FHIRString();
            $value->setValue($loc->roomKey);
            $extension2->setValueString($value);
            $extension3->setUrl('#pin');
            $value = new FHIRString();
            $value->setValue($loc->pin);
            $extension3->setValueString($value);
        }

        $extension4->setUrl(\URL::to('/fhir') . "/extension/extra-appointment-data");
        $valuePatientId = new FHIRExtension();
        $valuePatientId->setUrl('#patient-id');
        $value = new FHIRString();
        $value->setValue($appointment->getPatientId());
        $valuePatientId->setValueString($value);
        $valueProviderId = new FHIRExtension();
        $valueProviderId->setUrl('#provider-id');
        $value = new FHIRString();
        $value->setValue($appointment->getProviderId());
        $valueProviderId->setValueString($value);
        $extension4->addExtension($valuePatientId);
        $extension4->addExtension($valueProviderId);

        $extension->addExtension($extension1);
        $extension->addExtension($extension2);
        $extension->addExtension($extension3);

        // Add the extra appointment data
        $fhirAppointment->addExtension($extension4);
        // Add vidyo portal data
        $fhirAppointment->addExtension($extension);

        //$description
        $value = new FHIRString();
        $value->setValue($appointment->getDescription());
        $fhirAppointment->setDescription($value);

        return $fhirAppointment;
    }

    private function countDuration($start, $end)
    {
        return $duration = ($end - $start)/60;
    }

    private function checkPatientGroup($data, $ehr_pid)
    {
        $patientRepository = new PatientRepository();
        $patient = $patientRepository->get($data['patient']);
        $checkResult = false;
        if ($patient->getGroupId() == $ehr_pid) {
            $checkResult = true;
        }
        return $checkResult;
    }

}

<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use LibreEHR\Core\Contracts\AppointmentInterface;
use LibreEHR\Core\Emr\Criteria\ByPid;
use LibreEHR\FHIR\Utilities\UUIDClass;
use PHPFHIRGenerated\FHIRDomainResource\FHIRAppointment;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse;
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
use LibreEHR\FHIR\Utilities\Exceptions\FhirException;

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
        try {
            $data = $this->parseUrl($request->server->get('QUERY_STRING'));
            if (!isset($data['patient'])) {
                $args = array(
                    'severity'=> 'error',
                    'code'=> 'processing',
                    'diagnostics'=> 'Invalid request: Parameter patient is undefined',
                    'status'=> 'generated',
                    'div'=> '<div xmlns=\"http://www.w3.org/1999/xhtml\"><h1>Operation Outcome</h1><table border=\"0\"><tr><td style=\"font-weight: bold;\">error</td><td>[]</td><td><pre>Invalid request: Parameter patient is undefined</pre></td>\n\t\t\t\t\t\n\t\t\t\t\n\t\t\t</tr>\n\t\t</table>\n\t</div>'
                );
                throw new FhirException($args);
            }
            $collection = $this->repository->getAppointmentsByParam($data);

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
                    $appointmentUrl = $request->url() . '/' . $bundleId;
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
            if (empty($count)) {

                $args = array(
                    'severity'=> 'error',
                    'code'=> 'processing',
                    'diagnostics'=> 'Empty results: not found',
                    'status'=> 'generated',
                    'div'=> '<div xmlns=\"http://www.w3.org/1999/xhtml\"><h1>Operation Outcome</h1><table border=\"0\"><tr><td style=\"font-weight: bold;\">error</td><td>[]</td><td><pre>Empty results: not found</pre></td>\n\t\t\t\t\t\n\t\t\t\t\n\t\t\t</tr>\n\t\t</table>\n\t</div>'
                );

                throw new FhirException($args);
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
        } catch (FhirException $e) {
            return $e->OperationOutcome;
        }
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
    public function interfaceToModel(AppointmentInterface $appointment)
    {
        $fhirAppointment = new FHIRAppointment();

        $id = new FHIRId;
        $id->setValue($appointment->getId());
        $fhirAppointment->setId($id);

        $start = new FHIRInstant();
        $value = new FHIRString();
        $value->setValue($appointment->getStartTime());
        $start->setValue( $value );
        $fhirAppointment->setStart($start);

        $end = new FHIRInstant();
        $value = new FHIRString();
        $value->setValue($appointment->getEndTime());
        $end->setValue( $value );
        $fhirAppointment->setEnd($end);

        $status = new FHIRCode();
        $value = new FHIRString();
        $value->setValue($appointment->getPcApptStatus());
        $status->setValue( $value );
        $fhirAppointment->setStatus($status);

        $extension = new FHIRExtension;
        $extension1 = new FHIRExtension;
        $extension2 = new FHIRExtension;
        $extension3 = new FHIRExtension;
        $extension->setUrl(url('/') . '/extension/vidyo-portal-data');
        $extension1->setUrl('#portal-uri');
        $value = new FHIRString();
        $value->setValue('https://vircon.vu2vu.com');
        $extension1->setValueString($value);
        $extension2->setUrl('#room-key');
        $value = new FHIRString();
        $value->setValue('83mncNGYckBSS612N28eYsNfdQ');
        $extension2->setValueString($value);
        $extension3->setUrl('#pin');
        $value = new FHIRString();
        $value->setValue('1234');
        $extension3->setValueString($value);
        $extension->addExtension($extension1);
        $extension->addExtension($extension2);
        $extension->addExtension($extension3);
        $fhirAppointment->addExtension($extension);

        //$description
        $value = new FHIRString();
        $value->setValue($appointment->getDescription());
        $fhirAppointment->setDescription($value);

        return $fhirAppointment;
    }

    private function parseUrl($url)
    {
        $array = explode('&', $url);
        foreach ($array as $ln) {
            if (strpos($ln, 'patient') !== false) {
                $data['patient'] = substr($ln, strpos($ln, "=") + 1);
            }
            else{
                $data[] = substr($ln, strpos($ln, "=") + 1);
            }
        }
        return $data;

    }
}
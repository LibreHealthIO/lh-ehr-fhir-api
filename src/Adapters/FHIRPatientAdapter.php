<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use LibreEHR\Core\Contracts\PatientAdapterInterface;
use LibreEHR\Core\Contracts\PatientInterface;
use LibreEHR\Core\Contracts\DocumentInterface;

use LibreEHR\Core\Contracts\BaseAdapterInterface;
use LibreEHR\Core\Contracts\PatientRepositoryInterface;
use LibreEHR\Core\Emr\Criteria\ByPid;
use LibreEHR\Core\Emr\Criteria\PatientByPid;
use LibreEHR\Core\Emr\Repositories\PharmacyRepository;
use LibreEHR\Core\Emr\Repositories\ProviderRepository;
use PHPFHIRGenerated\FHIRDomainResource\FHIRPatient;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use \PHPFHIRGenerated\FHIRElement\FHIRAttachment;
use PHPFHIRGenerated\FHIRElement\FHIRContactPoint;
use PHPFHIRGenerated\FHIRElement\FHIRContactPointSystem;
use PHPFHIRGenerated\FHIRElement\FHIRContactPointUse;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse;
use PHPFHIRGenerated\FHIRElement\FHIRNameUse;
use PHPFHIRGenerated\FHIRElement\FHIRHumanName;
use PHPFHIRGenerated\FHIRElement\FHIRResponseType;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource;
use PHPFHIRGenerated\FHIRResource\FHIRBundle;
use PHPFHIRGenerated\PHPFHIRResponseParser;
use PHPFHIRGenerated\FHIRElement\FHIRExtension;
use PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleEntry;
use PHPFHIRGenerated\FHIRResource\FHIRBundle\FHIRBundleResponse;
use ArrayAccess;

use Illuminate\Support\Facades\Auth;
use LibreEHR\FHIR\Http\Controllers\Auth\AuthModel\User;

class FHIRPatientAdapter extends AbstractFHIRAdapter implements BaseAdapterInterface, PatientAdapterInterface
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
        // Before we store the patient:
        // 1. figure out which connection to use
        // 2. get the emr_provider ID from provider table
        // 3. get the emr_pharmacy ID from the pharmacy table

        $pharmacyId = $patientInterface->getPharmacyId();
        $pharmRepo = new PharmacyRepository();
        $pharmacy = $pharmRepo->get( $pharmacyId );
        $emrId = $pharmacy->getEmrId();
        $patientInterface->setPharmacyId( $emrId );

        $providerId = $patientInterface->getProviderId();
        $providerRepo = new ProviderRepository();
        $provider = $providerRepo->get( $providerId );
        $emrId = $provider->getEmrId();
        $patientInterface->setProviderId( $emrId );

        $connection = $provider->getConnection();
        $this->repository->setConnection( $connection );

        $patientInterface = $this->repository->create( $patientInterface );

        $providerOriginal = $provider->getOriginal();
        $currentUser = Auth::user();
        $currentUser->ehr_pid = $providerId;
        $currentUser->connection = $providerOriginal['connection'];
        $currentUser->save();

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
        foreach ( $collection as $patient ) {
            if ( $patient instanceof PatientInterface ) {
                $fhirPatient = $this->interfaceToModel( $patient );
                $output[]= $fhirPatient;
            }
        }

        return $output;
    }

    /**
     * @param $id
     * @return array
     */
    public function showPatient($id)
    {
        $patient = $this->repository->get($id);
        if (!empty($patient)) {
            return  $this->interfaceToModel( $patient );
        } else {
            abort(404, 'No Patient with id = ' . $id. ' found');
        }
    }

    public function update($request)
    {
        $data = $request->json()->all();

        if(!isset($data['id'])) {
            return json_encode(array('error' => 'no arguments'));
        }
        // TODO add validation
        $storedInterface = $this->requestToInterface( $data['id'], $data );

        return $this->interfaceToModel( $storedInterface );

    }

    /**
     * @param string $data
     * @return AppointmentInterface
     *
     * Takes a FHIR post string and returns a AppointmentInterface
     */
    public function requestToInterface( $id, $data )
    {

        $patientInterface = $this->repository->update($id, $data);

        return $patientInterface;
    }

    /**
     * @param PatientInterface $patientInterface
     * @return PatientInterface
     */
    public function updateInterface( PatientInterface $patientInterface )
    {
        $patientInterface = $this->repository->update( $patientInterface );
        return $patientInterface;
    }
    
    
    
    
    

    /**
     * @param $id
     * @return array
     */
    public function removePatient($id)
    {
        return $this->repository->delete($id);
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
        if ( $fhirPatient instanceof FHIRPatient ) {
            return $this->modelToInterface( $fhirPatient );
        } else {
            // Error, the Resource does not match, expecting a Patient,
            // // but got something else.
            abort(403, 'Error, the Resource does not match, expecting a Patient, but got "' . typeOf($fhirPatient). '"');
        }

    }

    public function modelToInterface( FHIRPatient $fhirPatient )
    {
        $patientInterface = App::make('LibreEHR\Core\Contracts\PatientInterface');
        if ($patientInterface instanceof PatientInterface) {
            $birthDate = $fhirPatient->getBirthDate()->getValue();
            $patientInterface->setDOB($birthDate);
            $humanName = $fhirPatient->getName();
            $familyName = $humanName[0]->getFamily();
            $lname = $familyName[0]->getValue();
            $patientInterface->setLastName($lname);
            $givenName = $humanName[0]->getGiven();
            $fname = $givenName[0]->getValue();
            $patientInterface->setFirstName($fname);
            $gender = $fhirPatient->getGender();
            $patientInterface->setGender($gender->getValue());

            $phoneNumbers = $fhirPatient->getTelecom();
            $primaryPhone = $phoneNumbers[0]->getValue();
            $patientInterface->setPrimaryPhone($primaryPhone);

            $extensions = $fhirPatient->getExtension();
            foreach ($extensions as $extension) {
                $url = $extension->getUrl();

                if (strpos($url, '/gponline-patient-extensions') !== false)
                {
                    $patientExtensions = $extension->getExtension();
                    foreach ($patientExtensions as $extension2) {
                        if ($extension2->getUrl() == "#providerId") {
                            $providerId = $extension2->getValueString();
                            $patientInterface->setProviderId($providerId->getValue());
                        }
                        if ($extension2->getUrl() == "#pharmacyId") {
                            $pharmacyId = $extension2->getValueString();
                            $patientInterface->setPharmacyId($pharmacyId->getValue());
                        }
                        if ($extension2->getUrl() == "#status") {
                            $status = $extension2->getValueString();
                            $patientInterface->setStatus($status->getValue());
                        }
                    }

                }

                switch ($url) {
                    case \URL::to('/fhir') . "/extension/contracts":
                        $x2s = $extension->getExtension();
                        foreach ($x2s as $x2) {
                            $url2 = $x2->getUrl();
                            switch ($url2) {
                                case "#terms-of-service":
                                    break;
                                case "#allow-sms" :
                                    $allowSms = $x2->getValueBoolean();
                                    $allowSms = ($allowSms->getValue() == 1) ? 'YES' : 'NO';
                                    $patientInterface->setAllowSms($allowSms);
                                    break;
                            }
                        }
                        break;

                    case \URL::to('/fhir') . "/extension/gponline-patient-data":
                        $x2s = $extension->getExtension();
                        foreach ($x2s as $x2) {
                            $url2 = $x2->getUrl();
                            switch ($url2) {
                                case "#providerId":
                                    break;
                                case "#pharmacyId" :
                                    $allowSms = $x2->getValueBoolean();
                                    $allowSms = ($allowSms->getValue() == 1) ? 'YES' : 'NO';
                                    $patientInterface->setAllowSms($allowSms);
                                    break;
                            }
                        }
                        break;
                }
            }

            $photos = $fhirPatient->getPhoto();
            if(!empty($photos)) {
                $photo = $photos[0];
                $formatCode = $photo->getContentType();
                $mimetype = $formatCode->getValue();
                $ext = "";
                switch ($mimetype) {
                    case "image/jpeg":
                        $ext = "jpg";
                        break;
                    default:
                        $ext = "jpeg";
                        break;
                }
                $base64Binary = $photo->getData();
                $photo = App::make('LibreEHR\Core\Contracts\DocumentInterface');
                $photo->setMimetype($mimetype);
                $photo->base64Data = $base64Binary->getValue();
                $photo->filename = rand() . "." . $ext;
                $patientInterface->setPhoto($photo);
            }
        }
        return $patientInterface;
    }

    /**
     * @param PatientInterface $patient
     * @return FHIRPatient
     */
    public function interfaceToModel( PatientInterface $patient )
    {
        $fhirBundle = new FHIRBundle();
        $bundleType = new FHIRString();
        $bundleType->setValue('transaction-response');
        $fhirBundle->setType($bundleType);
        $total = new FHIRString();
        $total->setValue('1');
        $fhirBundle->setTotal($total);



        $fhirPatient = new FHIRPatient();

        $identifier = new FHIRIdentifier();
        $use = new FHIRIdentifierUse();
        $use->setValue( "usual" );
        $identifier->setUse( $use );
        $value = new FHIRString();
        $value->setValue( $patient->getId() );
        $identifier->setValue( $value );
        $fhirPatient->addIdentifier( $identifier );

        $dob = new FHIRDate();
        $dob->setValue( $patient->getDOB() );
        $fhirPatient->setBirthDate( $dob );

        $name = new FHIRHumanName();
        $nameUse = new FHIRNameUse();
        $nameUse->setValue( "usual" );
        $name->setUse( $nameUse );
        $givenName = new FHIRString();
        $name->addGiven( $givenName->setValue( $patient->getFirstName() ) );
        $familyName = new FHIRString();
        $name->addFamily( $familyName->setValue( $patient->getLastName() ) );
        $fhirPatient->addName( $name );

        $gender = new FHIRCode();
        $gender->setValue( $patient->getGender() );
        $fhirPatient->setGender( $gender );

        $phone = new FHIRContactPoint();
        $use = new FHIRContactPointUse();
        $use->setValue( 'primary' );
        $phone->setUse( $use );
        $system = new FHIRContactPointSystem();
        $system->setValue( 'phone' );
        $phone->setSystem( $system );
        $phoneNumber = new FHIRString();
        $phoneNumber->setValue( $patient->getPrimaryPhone() );
        $phone->setValue( $phoneNumber );
        $fhirPatient->addTelecom( $phone );

        $email = new FHIRContactPoint();
        $use = new FHIRContactPointUse();
        $use->setValue( 'primary' );
        $email->setUse( $use );
        $system = new FHIRContactPointSystem();
        $system->setValue( 'email' );
        $email->setSystem( $system );
        $emailAddress = new FHIRString();
        $emailAddress->setValue( $patient->getEmailAddress() );
        $email->setValue( $emailAddress );
        $fhirPatient->addTelecom( $email );


        if ( $patient->getPhoto() ) {
            $photo = new FHIRAttachment();
            $contentType = new FHIRCode();
            $contentType->setValue( $patient->getPhoto()->getMimetype() );
            $photo->setContentType( $contentType );
            $photoUrl = new FHIRUri();
            $photoUrl->setValue( $patient->getPhoto()->getPublicUrl() );
            $photo->setUrl( $photoUrl );
            $fhirPatient->addPhoto( $photo );
        }

        $extension = new FHIRExtension;
        $extension1 = new FHIRExtension;
        $extension2 = new FHIRExtension;
        $extension3 = new FHIRExtension;
        $extension4 = new FHIRExtension;
        $extension5 = new FHIRExtension;

        $extension->setUrl( \URL::to('/fhir') . "/extension/gponline-patient-data" );

        $extension1->setUrl('#groupId');
        $value = new FHIRString();
        $value->setValue("1001");
        $extension1->setValueString($value);

        $extension2->setUrl('#status');
        $value = new FHIRString();
        $value->setValue("pending");
        $extension2->setValueString($value);

        $extension3->setUrl('#providerId');
        $value = new FHIRString();
        $value->setValue("34");
        $extension3->setValueString($value);

        $extension4->setUrl('#pharmacyId');
        $value = new FHIRString();
        $value->setValue("5");
        $extension4->setValueString($value);

        $extension5->setUrl('#stripeToken');
        $value = new FHIRString();
        $value->setValue("Some value of stripeToken");
        $extension5->setValueString($value);

        $extension->addExtension($extension1);
        $extension->addExtension($extension2);
        $extension->addExtension($extension3);
        $extension->addExtension($extension4);
        $extension->addExtension($extension5);
        
        $fhirPatient->addExtension($extension);

        $entry = new FHIRBundleEntry();
        $entry->setResource($fhirPatient);
        $fullUrl = new FHIRString();

        $currentUser = Auth::user();
        $fullUrl->setValue(\URL::current().'/fhir/' . $currentUser->connection. '/Patient/' . $patient->getId());
        $entry->setFullUrl($fullUrl);

        $response = new FHIRBundleResponse();
        $status = new FHIRString();
        $status->setValue('201 Created');
        $response->setStatus($status);
        $location = new FHIRString();
        $location->setValue('Patient/'. $patient->getId());
        $response->setLocation($location);
        $entry->setResponse($response);
        $fhirBundle->addEntry($entry);

        return $fhirBundle;
    }
}
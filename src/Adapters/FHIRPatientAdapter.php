<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use LibreEHR\Core\Contracts\PatientAdapterInterface;
use LibreEHR\Core\Contracts\PatientInterface;
use LibreEHR\Core\Contracts\DocumentInterface;

use LibreEHR\Core\Contracts\PatientRepositoryInterface;
use LibreEHR\Core\Emr\Criteria\PatientByPid;
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
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\PHPFHIRResponseParser;
use ArrayAccess;

class FHIRPatientAdapter implements PatientAdapterInterface
{
    protected $repository = null;

    public function __construct( PatientRepositoryInterface $repositoryInterface )
    {
        $this->repository = $repositoryInterface;
    }

    /**
     * @param $id ID identifying resource
     * @return string
     *
     * Takes a resource ID and returns a FHIR JSON or XML string
     * in response
     */
    public function retrieve( $id )
    {
        $this->repository->finder()->pushCriteria( new ByPid( array( 'pid' => $id ) ) );
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
        foreach ( $collection as $patient ) {
            if ( $patient instanceof PatientInterface ) {
                $fhirPatient = $this->interfaceToOutput( $patient );
                $output[]= $fhirPatient;
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
            $patientInterface->setPrimaryPhone( $primaryPhone );

            $extensions = $fhirPatient->getExtension();
            foreach ( $extensions as $extension ) {
               $url = $extension->getUrl();
               switch ( $url ) {
                   case "https://fhirdev.ttdnow.com/extension/contracts":
                       $x2s = $extension->getExtension();
                       foreach ( $x2s as $x2 ) {
                           $url2 = $x2->getUrl();
                           switch ( $url2 ) {
                               case "#terms-of-service":
                                   break;
                               case "#allow-sms" :
                                   $allowSms = $x2->getValueBoolean();
                                   $allowSms = ( $allowSms->getValue() == 1 ) ? 'YES' : 'NO';
                                   $patientInterface->setAllowSms( $allowSms );
                                   break;
                           }
                       }
                       break;
               }
            }

            $photos = $fhirPatient->getPhoto();
            $photo = $photos[0];
            $formatCode = $photo->getContentType();
            $mimetype = $formatCode->getValue();
            $ext = "";
            switch ( $mimetype ) {
                case "image/jpeg":
                    $ext = "jpg";
                    break;
                default:
                    $ext = "jepg";
                    break;
            }
            $base64Binary = $photo->getData();
            $photo = App::make( 'LibreEHR\Core\Contracts\DocumentInterface' );
            $photo->setMimetype( $mimetype );
            $photo->base64Data = $base64Binary->getValue();
            $photo->filename = rand().".".$ext;
            $patientInterface->setPhoto( $photo );
        }

        return $patientInterface;
    }

    /**
     * @param PatientInterface $patient
     * @return FHIRPatient
     */
    public function interfaceToModel( PatientInterface $patient )
    {
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
        // TODO provide other data to FHIR models
        //

        return $fhirPatient;
    }
}
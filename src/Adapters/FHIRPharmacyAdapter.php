<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use LibreEHR\Core\Contracts\PharmacyAdapterInterface;
use LibreEHR\Core\Contracts\PharmacyInterface;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use LibreEHR\Core\Emr\Criteria\ByPid;
use PHPFHIRGenerated\FHIRDomainResource\FHIROrganization;
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

class FHIRPharmacyAdapter extends AbstractFHIRAdapter implements BaseAdapterInterface, PharmacyAdapterInterface
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
        $this->repository->finder()->pushCriteria(new ByPid($id));
        $pharmacyInterface = $this->repository->find();
        return $this->interfaceToModel($pharmacyInterface);
    }

    /**
     * @param Request $request
     * @return FHIRPharmacy
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
     * @param PharmacyInterface $pharmacyInterface
     * @return PharmacyInterface
     */
    public function storeInterface(PharmacyInterface $pharmacyInterface)
    {
        $pharmacyInterface = $this->repository->create($pharmacyInterface);
        return $pharmacyInterface;
    }

    /**
     * @param ArrayAccess $collection
     * @return array
     */
    public function collectionToOutput()
    {
        $collection = $this->repository->fetchAll();
        $output = array();
        foreach ($collection as $pharmacy) {
            if ($pharmacy instanceof PharmacyInterface) {
                $fhirPharmacy= $this->interfaceToModel($pharmacy);
                $output[]= $fhirPharmacy;
            }
        }

        return $output;
    }

    /**
     * @param $id
     * @return array
     */
    public function showPharmacy($id)
    {
        $pharmacy = $this->repository->get($id);
        if (!empty($pharmacy)) {
            return  $this->interfaceToModel($pharmacy);
        } else {
            abort(404, 'No Patient with id = ' . $id. ' found');
        }
    }

    public function update($request)
    {
        $data = $request->json()->all();

        if (!isset($data['id'])) {
            return json_encode(array('error' => 'no arguments'));
        }
        // TODO add validation
        $storedInterface = $this->requestToInterface($data['id'], $data);

        return $this->interfaceToModel($storedInterface);
    }

    /**
     * @param string $data
     * @return PharmacyInterface
     *
     * Takes a FHIR post string and returns a PharmacyInterface
     */
    public function requestToInterface($id, $data)
    {
        $pharmacyInterface = $this->repository->update($id, $data);
        return $pharmacyInterface;
    }

    /**
     * @param PharmacyInterface $pharmacyInterface
     * @return PharmacyInterface
     */
    public function updateInterface(PharmacyInterface $pharmacyInterface)
    {
        $pharmacyInterface = $this->repository->update($pharmacyInterface);
        return $pharmacyInterface;
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
     * @return PharmacyInterface
     *
     * Takes a FHIR post string and returns a PharmacyInterface
     */
    public function jsonToInterface($data)
    {
        $parser = new \PHPFHIRGenerated\PHPFHIRResponseParser();
        $fhirPharmacy= $parser->parse($data);
        if ($fhirPharmacy instanceof FHIROrganization) {
            return $this->modelToInterface($fhirPharmacy);
        } else {
            // Error, the Resource does not match, expecting a Patient,
            // // but got something else.
            abort(403, 'Error, the Resource does not match, expecting a Patient, but got "' . typeOf($fhirPharmacy). '"');
        }
    }

    public function modelToInterface(FHIROrganization $fhirPharmacy)
    {
        $pharmacyInterface = App::make('LibreEHR\Core\Contracts\PharmacyInterface');
        if ($pharmacyInterface instanceof PharmacyInterface) {
            $pharmacyId = $fhirPharmacy->getId()->getValue();
            $pharmacyInterface->setDOB($pharmacyId);
            $pharmacyName = $fhirPharmacy->getName();
            $pharmacyInterface->setName($pharmacyName);
            $pharmacyAdress = $fhirPharmacy->getAddress();
            $pharmacyInterface->setAddress($pharmacyAdress);
            $pharmacyStatus = $fhirPharmacy->getStatus();
            $pharmacyInterface->setStatus($pharmacyStatus);
        }

        return $pharmacyInterface;
    }

    /**
     * @param PharmacyInterface $patient
     * @return FHIRPharmacy
     */
    public function interfaceToModel(PharmacyInterface $pharmacy)
    {
        $fhirPharmacy= new FHIROrganization();

        $identifier = new FHIRIdentifier();
        $use = new FHIRIdentifierUse();
        $use->setValue("usual");
        $identifier->setUse($use);
        $value = new FHIRString();
        $value->setValue($patient->getId());
        $identifier->setValue($value);
        $fhirPatient->addIdentifier($identifier);

        $dob = new FHIRDate();
        $dob->setValue($patient->getDOB());
        $fhirPatient->setBirthDate($dob);

        $name = new FHIRHumanName();
        $nameUse = new FHIRNameUse();
        $nameUse->setValue("usual");
        $name->setUse($nameUse);
        $givenName = new FHIRString();
        $name->addGiven($givenName->setValue($patient->getFirstName()));
        $familyName = new FHIRString();
        $name->addFamily($familyName->setValue($patient->getLastName()));
        $fhirPatient->addName($name);

        $gender = new FHIRCode();
        $gender->setValue($patient->getGender());
        $fhirPatient->setGender($gender);

        $phone = new FHIRContactPoint();
        $use = new FHIRContactPointUse();
        $use->setValue('primary');
        $phone->setUse($use);
        $system = new FHIRContactPointSystem();
        $system->setValue('phone');
        $phone->setSystem($system);
        $phoneNumber = new FHIRString();
        $phoneNumber->setValue($patient->getPrimaryPhone());
        $phone->setValue($phoneNumber);
        $fhirPatient->addTelecom($phone);

        $email = new FHIRContactPoint();
        $use = new FHIRContactPointUse();
        $use->setValue('primary');
        $email->setUse($use);
        $system = new FHIRContactPointSystem();
        $system->setValue('email');
        $email->setSystem($system);
        $emailAddress = new FHIRString();
        $emailAddress->setValue($patient->getEmailAddress());
        $email->setValue($emailAddress);
        $fhirPatient->addTelecom($email);

        return $fhirPharmacy;
    }
}
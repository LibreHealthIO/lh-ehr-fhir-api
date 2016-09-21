<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use LibreEHR\Core\Contracts\BundleAdapterInterface;
use LibreEHR\Core\Contracts\BundleInterface;

use Mockery\CountValidator\Exception;
use PHPFHIRGenerated\FHIRDomainResource\FHIRPatient;
use PHPFHIRGenerated\FHIRElement\FHIRBundleType;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRId;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse;
use PHPFHIRGenerated\FHIRElement\FHIRNameUse;
use PHPFHIRGenerated\FHIRElement\FHIRHumanName;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRUri;
use PHPFHIRGenerated\FHIRResource\FHIRBundle;
use PHPFHIRGenerated\FHIRResourceContainer;
use PHPFHIRGenerated\PHPFHIRResponseParser;
use ArrayAccess;

class FHIRBundleAdapter implements BundleAdapterInterface
{
    /**
     * @param string $data
     * @return BundleInterface
     *
     * Takes a FHIR post string and returns a BundleInterface
     */
    public function store(Request $request)
    {
        $data = $request->getContent();
        $parser = new \PHPFHIRGenerated\PHPFHIRResponseParser();
        $fhirBundle = $parser->parse($data);
        if (is_a($fhirBundle, '\PHPFHIRGenerated\FHIRResource\FHIRBundle')) {
            // Instansiate the response bundle
            $fhirResponseBundle = new FHIRBundle();

            // Iterate over each entry in the Request Bundle and handle them according to
            // their Request elements
            $entries = $fhirBundle->getEntry();

            foreach ($entries as $entry) {
                // First get the proper resource out of the Resource Container
                $resourceContainer = $entry->getResource();
                $publicVars = get_object_vars($resourceContainer);
                foreach ($publicVars as $resourceKey => $value) {
                    if ($value !== null) {
                        // This is resource that our Resource Container is holding
                        $resource = $resourceContainer->{$resourceKey};
                        break;
                    }
                }

                // Prepare to build the response for this entry
                $responseEntry = new FHIRBundle\FHIRBundleEntry();
                $bundleResponse = new FHIRBundle\FHIRBundleResponse();

                try {
                    //$repositoryClass = "Mi2\\Emr\\Contracts\\{$resourceKey}RepositoryInterface";
                    //$repository = App::make( $repositoryClass );

                    $adapterClass = "\\Mi2\\FHIR\\Adapters\\FHIR{$resourceKey}Adapter";
                    $adapter = App::make($adapterClass);
                    //$adapter = new $adapterClass( $repository );

                    // Figure out what to do with the Resource by processing the Request for the Entry
                    $request = $entry->getRequest();
                    $method = $request->getMethod();

                    // Take action and build appropriate response
                    if ($method->getValue() == 'POST') {
                        // Store the Resource and get the newly created interface
                        // TODO check to make sure adapter implements these methods
                        $interface = $adapter->modelToInterface($resource);
                        $storedInterface = $adapter->storeInterface($interface);

                        // Build response
                        $bundleResponseStatus = new FHIRString();
                        $bundleResponseStatus->setValue('201 Created');
                        $bundleResponse->setStatus($bundleResponseStatus);

                        $bundleResponseLocation = new FHIRUri();
                        $bundleResponseLocation->setValue("{$resourceKey}/{$interface->getId()}");
                        $bundleResponse->setLocation($bundleResponseLocation);

                    }

                    $responseResource = $adapter->interfaceToModel($storedInterface);
                    $responseResourceId = new FHIRId();
                    $responseResourceId->setValue($interface->getId());
                    $responseResource->setId($responseResourceId);
                    $responseResourceContainer = new FHIRResourceContainer();
                    $responseResourceContainer->{$resourceKey} = $responseResource;

                    $responseEntry->setResource($responseResourceContainer);

                } catch (Exception $e) {
                    // TODO Put error codes in response
                    // Build error response
                    $bundleResponseStatus = new FHIRString();
                    $bundleResponseStatus->setValue('500 Internal Server Error');
                    $bundleResponse->setStatus($bundleResponseStatus);
                }

                $responseEntry->setResponse($bundleResponse);
                $fhirResponseBundle->addEntry($responseEntry);

            }

        } else {
            // Error, the Resource does not match, expecting a Bundle,
            // // but got something else.
        }

        // Complete the response
        $fhirBundleType = new FHIRBundleType();
        $fhirBundleType->setValue('transaction-response');
        $fhirResponseBundle->setType($fhirBundleType);

        return $fhirResponseBundle;
    }

    public function retrieve($id)
    {
    }

    /**
     * @param Request $request
     * @return FHIRBundle $bundle
     */
    public function collectionToOutput(Request $request = null)
    {
    }
}

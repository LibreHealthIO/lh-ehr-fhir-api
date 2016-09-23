<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Http\Request;
use LibreEHR\Core\Contracts\BaseAdapterInterface;
use LibreEHR\Core\Contracts\AppointmentInterface;

use LibreEHR\Core\Contracts\ValueSetInterface;
use LibreEHR\FHIR\Models\ValueSet;
use PHPFHIRGenerated\FHIRDomainResource\FHIRSlot;
use PHPFHIRGenerated\FHIRDomainResource\FHIRValueSet;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRInstant;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRReference;
//	Reference
use PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetContains;
use PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetExpansion;
use PHPFHIRGenerated\PHPFHIRResponseParser;
use Illuminate\Support\Facades\App;


class FHIRValueSetAdapter extends AbstractFHIRAdapter implements BaseAdapterInterface
{

    private $repositoryPath = '\LibreEHR\Core\Emr\Repositories\\';

    /**
     * @param $id ID identifying resource
     * @return string
     *
     * Takes a resource ID and returns a FHIR JSON or XML string
     * in response
     */
    public function retrieve( $id )
    {
        // First get the models using the resource specified in the database
        // using the appropriate connection
        $valueSet = ValueSet::find($id);
        $resource = $valueSet->resource;
        $connection = $valueSet->connection;
        $repositoryClass = $this->repositoryPath . ucfirst($resource) . 'Repository';
        $repository = new $repositoryClass();
        $repository->setConnection($connection);
        $models = $repository->fetchAll();

        // Create the value set and expansion to fill with the model data
        $FHIRValueSet = new FHIRValueSet();
        $FHIRExpansion = new FHIRValueSetExpansion();
        $timestamp = new FHIRString();
        $timestamp->setValue(date("Y-m-d H:i:s"));
        $FHIRExpansion->setTimestamp($timestamp);
        $identifier = new FHIRString();
        $identifier->setValue(uniqid($resource.'_'));
        $FHIRExpansion->setIdentifier($identifier);

        foreach ( $models as $model ) {
            if ( $model instanceof ValueSetInterface ) {

                // Models that implement ValueSetInterface are
                // capable of exporting the name (for display field), code
                // So that they conform to the ValueSetInterface
                // and properly fill the ValueSet->expansion->contains[]
                $FHIRContains = new FHIRValueSetContains();
                $display = new FHIRString();
                $display->setValue($model->getName());
                $code = new FHIRString();
                $code->setValue($model->getCode());
                $system = new FHIRString();
                $system->setValue(\URL::current());

                $FHIRContains->setDisplay($display);
                $FHIRContains->setCode($code);
                $FHIRContains->setSystem($system);
                $FHIRExpansion->addContains($FHIRContains);
            }
        }

        return $FHIRValueSet->setExpansion($FHIRExpansion);
    }
}

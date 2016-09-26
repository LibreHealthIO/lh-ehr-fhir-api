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
use PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetCompose;
use PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetContains;
use PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetExpansion;
use PHPFHIRGenerated\FHIRResource\FHIRValueSet\FHIRValueSetInclude;
use PHPFHIRGenerated\FHIRElement\FHIRCoding;
use PHPFHIRGenerated\FHIRElement\FHIRNarrative;
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
    public function retrieve($id)
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
        $valueSetID = new FHIRString();
        $valueSetID->setValue('test_id');
        $FHIRValueSet->setId($valueSetID);
        $text = new FHIRNarrative();
        $div = new FHIRString();
        $div->setValue("<div>\n      <h3>Value Set Contents</h3>\n      <p>This value set contains 3 concepts</p>\n      <table class=\"codes\">\n        <tr>\n          <td>\n            <b>Code</b>\n          </td>\n          <td>\n            <b>System</b>\n          </td>\n          <td>\n            <b>Display</b>\n          </td>\n        </tr>\n        <tr>\n          <td>\n            <a name=\"http---hl7.org-fhir-v2-0136-Y\"> </a>\n            <a href=\"v2/0136/index.html#Y\">Y</a>\n          </td>\n          <td>http://hl7.org/fhir/v2/0136</td>\n          <td>Yes</td>\n        </tr>\n        <tr>\n          <td>\n            <a name=\"http---hl7.org-fhir-v2-0136-N\"> </a>\n            <a href=\"v2/0136/index.html#N\">N</a>\n          </td>\n          <td>http://hl7.org/fhir/v2/0136</td>\n          <td>No</td>\n        </tr>\n        <tr>\n          <td>\n            <a name=\"http---hl7.org-fhir-data-absent-reason-asked\"> </a>\n            <a href=\"valueset-data-absent-reason.html#asked\">asked</a>\n          </td>\n          <td>http://hl7.org/fhir/data-absent-reason</td>\n          <td>Don't know</td>\n        </tr>\n      </table>\n      <h2>Yes/No/Don't Know</h2>\n      <p>For Capturing simple yes-no-don't know answers</p>\n      <p>This value set includes codes from the following code systems:</p>\n      <ul>\n        <li>Import all the codes that are contained in \n          <a href=\"v2/0136/index.html\">http://hl7.org/fhir/ValueSet/v2-0136</a>\n        </li>\n        <li>Include these codes as defined in \n          <a href=\"valueset-data-absent-reason.html\">http://hl7.org/fhir/data-absent-reason</a>\n          <table>\n            <tr>\n              <td>\n                <b>Code</b>\n              </td>\n              <td>\n                <b>Display</b>\n              </td>\n            </tr>\n            <tr>\n              <td>asked</td>\n              <td>Don't know</td>\n              <td>The source human does not know the value.</td>\n            </tr>\n          </table>\n        </li>\n      </ul>\n    </div>");
        $text->setDiv($div);

        $narrativeStatus = new FHIRString();
        $narrativeStatus->setValue("generated");
        $text->setStatus($narrativeStatus);
        $FHIRValueSet->setText($text);

        $url = new FHIRString();
        $url->setValue($valueSet->getValueSetUrl());
        $FHIRValueSet->setUrl($url);
        $name = new FHIRString();
        $name->setValue($valueSet->getValueSetName());
        $FHIRValueSet->setName($name);
        $status = new FHIRString();
        $status ->setValue("draft");
        $FHIRValueSet->setStatus($status);
        $description = new FHIRString();
        $description->setValue($valueSet->getValueSetDescription());
        $FHIRValueSet->setDescription($description);
        $compose = new FHIRValueSetCompose();
        $import = new FHIRString();
        $import->setValue("http://hl7.org/fhir/ValueSet/v2-0136");
        $compose->addImport($import);
        
        $concept =  new FHIRCoding();
        $code = new FHIRString();
        $code->setValue("asked");
        $concept->setCode($code);
        $display = new FHIRString();
        $display->setValue("Don't know");

        $include = new FHIRValueSetInclude();
        $system = new FHIRString();
        $system->setValue("http://hl7.org/fhir/data-absent-reason");
        $include->setSystem($system);
        $include->addConcept($concept);
        $concept->setDisplay($display);

        $compose->addInclude($include);

        $FHIRValueSet->setCompose($compose);

        $FHIRExpansion = new FHIRValueSetExpansion();
        $timestamp = new FHIRString();
        $timestamp->setValue(date("Y-m-d H:i:s"));
        $FHIRExpansion->setTimestamp($timestamp);
        $identifier = new FHIRString();
        $identifier->setValue(uniqid($resource . '_'));
        $FHIRExpansion->setIdentifier($identifier);

        foreach ($models as $model) {
            if ($model instanceof ValueSetInterface) {

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


    public function collectionToOutput()
    {
    }

    public function store(Request $request)
    {
    }
}
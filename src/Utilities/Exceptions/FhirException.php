<?php

namespace LibreEHR\FHIR\Utilities\Exceptions;

use Exception;
use PHPFHIRGenerated\FHIRDomainResource\FHIROperationOutcome;
use PHPFHIRGenerated\FHIRResource\FHIROperationOutcome\FHIROperationOutcomeIssue;
use PHPFHIRGenerated\FHIRElement\FHIRIssueSeverity;
use PHPFHIRGenerated\FHIRElement\FHIRIssueType;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\FHIRElement\FHIRNarrative;
use PHPFHIRGenerated\FHIRElement\FHIRNarrativeStatus;
use Illuminate\Support\Facades\Request;

class FhirException extends Exception
{
    protected $id;
    protected $details;
    protected $div;
    public $OperationOutcome;

    public function __construct($args = array())
    {
        $this->createOperationOutcome($args);
    }

    public function createOperationOutcome(array $args) {

        $severityValue = isset($args['severity']) ? $args['severity'] : '';
        $codeValue = isset($args['code']) ? $args['code'] : '';
        $diagnosticsValue = isset($args['diagnostics']) ? $args['diagnostics'] : '';
        $statusValue = isset($args['status']) ? $args['status'] : '';
        $divValue = isset($args['div']) ? $args['div'] : '';

        $operationOutcome = new FHIROperationOutcome;
        $issue = new FHIROperationOutcomeIssue;
        $severity = new FHIRIssueSeverity;
        $severity->setValue($severityValue);
        $issue->setSeverity($severity);
        $code = new FHIRIssueType;
        $code->setValue($codeValue);
        $issue->setCode($code);
        $diagnostics = new FHIRString;
        $diagnostics->setValue($diagnosticsValue);
        $issue->setDiagnostics($diagnostics);
        $operationOutcome->addIssue($issue);
        $text = new FHIRNarrative;
        $status = new FHIRNarrativeStatus;
        $status->setValue($statusValue);
        $text->setStatus($status);
        $text->setDiv($divValue);
        $operationOutcome->setText($text);
        $this->OperationOutcome = $operationOutcome;
    }
}
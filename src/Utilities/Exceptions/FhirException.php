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

    public function __construct()
    {
        $this->create(func_get_args());
        $this->createOperationOutcome();

    }

    protected function create(array $args)
    {
        $this->id = array_shift($args);
        $error = $this->errors($this->id);
        $this->details = vsprintf($error['context'], $args);
        $this->div = vsprintf($error['div'], $args);
        return $this->details;
    }

    private function errors($id)
    {
        $request = new Request;
        $request->
        $data= [
            '404' => [
                'context'  => 'Invalid request: The FHIR endpoint on this server does not know how to handle GET operation[Patient/107195/Appointment] with parameters [[]]',
                'div' => '<div xmlns=\"http://www.w3.org/1999/xhtml\"><h1>Operation Outcome</h1><table border=\"0\"><tr><td style=\"font-weight: bold;\">error</td><td>[]</td><td><pre>Invalid request: The FHIR endpoint on this server does not know how to handle GET operation[Patient/107195/Appointment] with parameters [[]]</pre></td>\n\t\t\t\t\t\n\t\t\t\t\n\t\t\t</tr>\n\t\t</table>\n\t</div>'
            ]
        ];
        return $data[$id];
    }
    public function createOperationOutcome() {
        $operationOutcome = new FHIROperationOutcome;
        $issue = new FHIROperationOutcomeIssue;
        $severity = new FHIRIssueSeverity;
        $severity->setValue('error');
        $issue->setSeverity($severity);
        $code = new FHIRIssueType;
        $code->setValue('processing');
        $issue->setCode($code);
        $diagnostics = new FHIRString;
        $diagnostics->setValue($this->details);
        $issue->setDiagnostics($diagnostics);
        $operationOutcome->addIssue($issue);
        $text = new FHIRNarrative;
        $status = new FHIRNarrativeStatus;
        $status->setValue('generated');
        $text->setStatus($status);
        $text->setDiv($this->div);
        $operationOutcome->setText($text);
        $this->OperationOutcome = $operationOutcome;
    }
}
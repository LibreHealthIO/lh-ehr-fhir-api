<?php

namespace LibreEHR\FHIR\Adapters;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use LibreEHR\Core\Contracts\AuditEventAdapterInterface;
use LibreEHR\Core\Contracts\AuditEventInterface;
use LibreEHR\Core\Contracts\AuditEventRepositoryInterface;
use PHPFHIRGenerated\FHIRDomainResource\FHIRAuditEvent;
use ArrayAccess;

class FHIRAuditEventAdapter implements AuditEventAdapterInterface
{
    protected $repository = null;

    public function __construct( AuditEventRepositoryInterface $repositoryInterface )
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
        $interface = $this->repository->find()->byId( $id );
        return $this->interfaceToModel( $interface );
    }

    public function store( Request $request )
    {
        // TODO add validation
        $data = $request->getContent();
        $interface = $this->jsonToInterface( $data );
        $storedInterface = $this->storeInterface( $interface );
        return $this->interfaceToModel( $storedInterface );
    }

    public function storeInterface( AuditEventInterface $auditEventInterface )
    {
        $patientInterface = $this->repository->create( $auditEventInterface );
        return $patientInterface;
    }

    /**
     * @param ArrayAccess $collection
     * @return array
     */
    public function collectionToOutput()
    {

    }

    /**
     * @param string $data
     * @return
     *
     * Takes a FHIR post string and returns a
     */
    public function jsonToInterface( $data )
    {
        $parser = new \PHPFHIRGenerated\PHPFHIRResponseParser();
        $fhirModel = $parser->parse( $data );
        if ( is_a( $fhirModel, 'FHIRAuditEvent' ) ) {
            return $this->modelToInterface( $fhirModel );
        } else {
            // Error, the Resource does not match, expecting a Patient,
            // // but got something else.
        }
    }

    public function modelToInterface( FHIRAuditEvent $fhirAuditEvent )
    {
        $auditEventInterface = App::make( 'LibreEHR\Core\Contracts\AuditEventInterface' );
        if ( $auditEventInterface instanceof AuditEventInterface ) {
            $participants = $fhirAuditEvent->getParticipant();
            $firstParticipant = $participants[0];
            $username = $firstParticipant->getAltId()->getValue();
            $auditEventInterface->setUsername( $username );

            $auditEventInterface->setEventJson( json_encode( $fhirAuditEvent->jsonSerialize() ) );
        }

        return $auditEventInterface;
    }

    public function interfaceToModel( AuditEventInterface $auditEventInterface )
    {
        return new FHIRAuditEvent();
    }
}
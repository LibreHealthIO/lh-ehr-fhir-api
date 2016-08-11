<?php
namespace LibreEHR\FHIR\Http\Controllers;

use LibreEHR\Core\Contracts\BaseAdapterInterface;

class SlotController extends AbstractController
{
    protected $slotAdapter = null;

    public function __construct( BaseAdapterInterface $slotAdapter )
    {
        $this->slotAdapter = $slotAdapter;
    }

    public function index()
    {
        return $this->slotAdapter->collectionToOutput();
    }
}
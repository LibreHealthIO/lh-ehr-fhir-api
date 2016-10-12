<?php
namespace LibreEHR\FHIR\Http\Controllers;

use LibreEHR\Core\Contracts\BaseAdapterInterface;
use Illuminate\Http\Request;

class SlotController extends AbstractController
{
    protected $slotAdapter = null;

    public function __construct( BaseAdapterInterface $slotAdapter )
    {
        $this->slotAdapter = $slotAdapter;
    }

    public function index(Request $request = null)
    {
        $this->init();
        return $this->slotAdapter->getSlots($request);
    }
}
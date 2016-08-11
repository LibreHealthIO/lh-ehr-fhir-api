<?php
namespace LibreEHR\FHIR\Http\Controllers;

use LibreEHR\Core\Contracts\BaseAdapterInterface;

class ScheduleController extends AbstractController
{
    protected $scheduleAdapter = null;

    public function __construct( BaseAdapterInterface $scheduleAdapter )
    {
        $this->scheduleAdapter = $scheduleAdapter;
    }

    public function index()
    {
        return $this->scheduleAdapter->collectionToOutput();
    }

}
<?php

namespace LibreEHR\FHIR\Http\Controllers;

use Illuminate\Http\Request;
use LibreEHR\FHIR\Adapters\FHIRAppointmentAdapter;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class AppointmentController extends AbstractController
{
    public function __construct()
    {
        $this->adapter = new FHIRAppointmentAdapter;
    }

    public function index()
    {

    }

    public function getSchedule()
    {
        $results = DB::select('select * from openemr_postcalendar_events');
        $json = json_encode($results);

        return $json;
    }

    public function addSlot( Request $request )
    {
        $start = $request->input('start');
        $end = $request->input('end');
        $pid = $request->input('pid');

        $result = DB::insert('insert into openemr_postcalendar_events (pc_pid, pc_startTime, pc_endTime) values (?, ?, ?)', [$pid, $start, $end]);

        return json_encode($result);
    }

    public function checkStatus(  Request $request )
    {
        $pc_eid = $request->input('pc_eid');
        $result = DB::select('select pc_apptstatus from openemr_postcalendar_events  where pc_eid = ?', [$pc_eid]);

        return json_encode($result);
    }

}


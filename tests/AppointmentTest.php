<?php

use Illuminate\Http\Response;

class AppointmentTest extends TestCase
{
    // The setUp() and tearDown() template methods are run once for each test
    // // method (and on fresh instances) of the test case class.
    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {

    }

    public function testJsonPost()
    {
        $path = __DIR__."/data";
        $data = file_get_contents( "$path/appointment-list-response-minimal.json");
        $response = $this->call( 'POST',
            '/fhir/Appointment',
            [],
            [],
            [],
            $headers = ['HTTP_CONTENT_TYPE' => 'application/json'],
            $data );
        echo $response;
    }

    public function testGetAllPatientAppointments()
    {
        $this->get('/fhir/Appointment?patient=1')
            ->seeJsonStructure([
                "id",
                "meta",
                "resourceType",
                "type",
                "total",
                "link",
                "entry"
            ]);
    }

    public function testCreateAppointment()
    {
        $path = __DIR__."/data";
        $data =  json_decode(file_get_contents( "$path/appointment_create.json"), true);
        $this->json('POST', '/fhir/Appointment', $data)
            ->seeJsonStructure([
                    "id",
                    "resourceType",
                    "extension",
                    "status",
                    "description",
                    "start",
                    "end",
                ]
            );



    }

    /**
     * Test checks functionality for getting appointments by EQUAL date
     */
    public function testGetPatientAppointmentByDateEQ()
    {
        $patientId = 1;
        $date = 'eq2016-08-04';
        $response = $this->get('/fhir/Appointment?patient='.$patientId.'&date_eq='.$date);
        $start = $response->response->original->entry[0]->resource->Appointment->start->value->value;
        $start = $this->trimDate($start);
        $this->assertEquals($this->getDate($date, 'eq'), $start);
    }

    /**
     * Test checks functionality for getting appointments by NOT EQUAL date
     */
    public function testGetPatientAppointmentByDateNE()
    {
        $patientId = 1;
        $date = 'ne2016-08-04';
        $response = $this->get('/fhir/Appointment?patient='.$patientId.'&date='.$date);
        $data = $response->response->original->entry;
        $assertionCount = 0;
        foreach ($data as $ln) {
            if ($ln->resource->Appointment->start->value->value == $this->getDate($date, 'ne')) {
                $assertionCount++;
            }
        }
        $this->assertEquals(0, $assertionCount);
    }

    /**
     * Test checks functionality for getting appointments by GREATER THAN and LOWER THAN date
     */
    public function testGetPatientAppointmentByDateGtLt()
    {
        $patientId = 1;
        $date = 'gt2016-08-04';
        $response = $this->get('/fhir/Appointment?patient='.$patientId.'&date'.$date);
        $data = $response->response->original->entry;
        $assertionCount = 0;
        foreach ($data as $ln) {
            $startDate = $this->trimDate($ln->resource->Appointment->start->value->value);
            if (($startDate < $this->getDate($date, 'gt'))) {
                $assertionCount++;
            }
        }
        $this->assertEquals(0, $assertionCount);
    }


    private function trimDate($date){
        return substr($date, 0, strpos($date, " "));
    }

    private function getDate($ln, $param)
    {
        return substr($ln, strpos($ln, $param) + 2);
    }
}
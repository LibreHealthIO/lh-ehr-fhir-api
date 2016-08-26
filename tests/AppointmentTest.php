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
        $date_eq = '2016-08-04';
        $response = $this->get('/fhir/Appointment?patient='.$patientId.'&date_eq='.$date_eq);
        $start = $response->response->original->entry[0]->resource->Appointment->start->value->value;
        $start = $this->trimDate($start);
        $this->assertEquals($date_eq, $start);
    }

    /**
     * Test checks functionality for getting appointments by NOT EQUAL date
     */
    public function testGetPatientAppointmentByDateNE()
    {
        $patientId = 1;
        $date_ne = '2016-08-04';
        $response = $this->get('/fhir/Appointment?patient='.$patientId.'&date_ne='.$date_ne);
        $data = $response->response->original->entry;
        $assertionCount = 0;
        foreach ($data as $ln) {
            if ($ln->resource->Appointment->start->value->value == $date_ne) {
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
        $date_gt = '2016-08-04';
        $response = $this->get('/fhir/Appointment?patient='.$patientId.'&date_gt'.$date_gt);
        $data = $response->response->original->entry;
        $assertionCount = 0;
        foreach ($data as $ln) {
            $startDate = $this->trimDate($ln->resource->Appointment->start->value->value);
            if (($startDate < $date_gt)) {
                $assertionCount++;
            }
        }
        $this->assertEquals(0, $assertionCount);
    }


    private function trimDate($date){
        return substr($date, 0, strpos($date, " "));
    }
}
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
                "resourceType",
                "id",
                "meta",
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

}
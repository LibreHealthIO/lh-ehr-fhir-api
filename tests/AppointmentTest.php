<?php

use Illuminate\Http\Response;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AppointmentTest extends TestCase
{
    use DatabaseMigrations;
    // The setUp() and tearDown() template methods are run once for each test
    // // method (and on fresh instances) of the test case class.
    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {

    }

//    public function testJsonPost()
//    {
//        $path = __DIR__."/data";
//        $data = file_get_contents( "$path/appointment-list-response-minimal.json");
//        $response = $this->call( 'POST',
//            '/fhir/Patient',
//            [],
//            [],
//            [],
//            $headers = ['HTTP_CONTENT_TYPE' => 'application/json'],
//            $data );
//        echo $response;
//    }

    public function testGetAllPatientAppointments()
    {
        $this->get('/fhir/Appointment?patient=1')
            ->seeJsonStructure([
                "resourceType",
                "entry" => [
                    [
                        "resource" => [
                            "resourceType",
                            "identifier",
                            "status",
                            "type" ,
                            "start",
                            "end",
                            "minutesDuration",
                        ],
                    ],
                ]
            ]);
    }

    public function testCreateAppointment()
    {
        $this->post('/fhir/Appointment')
            ->seeJsonStructure([
                "resourceType",
                "entry" => [
                    [
                        "resource" => [
                            "resourceType",
                            "identifier",
                            "status",
                            "type" ,
                            "start",
                            "end",
                            "minutesDuration",
                        ],
                    ],
                ]
            ]);
    }

}
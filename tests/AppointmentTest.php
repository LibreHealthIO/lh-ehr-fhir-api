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
        $faker = new Faker\Generator();
        $this->post('/fhir/Appointment',
            [
                "status" => "Chart-pulled",
                "type"   => "Office Visit",
                "start"  => $faker->unique()->dateTimeBetween($startDate = "now", $endDate = "10 days")->format('Y-m-d'),
                "end"    => $faker->unique()->dateTimeBetween($startDate = "now", $endDate = "10 days")->format('Y-m-d'),
                "minutesDuration" => 900,
            ]
        )
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
                ]
            );
    }

}
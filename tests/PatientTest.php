<?php

use Illuminate\Http\Response;

class PatientTest extends TestCase
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
        $data = file_get_contents( "$path/everywoman_simple_create.json");
        $response = $this->call( 'POST',
            '/fhir/Patient',
            [],
            [],
            [],
            $headers = ['HTTP_CONTENT_TYPE' => 'application/json'],
            $data );
        echo $response;
    }

    public function testCreatePatient()
    {
        $path = __DIR__."/data";
        $json =  file_get_contents( "$path/everywoman_simple_create.json");
        $jsonDecode = json_decode($json, true);

        $this->json('POST', '/fhir/Patient', $jsonDecode)
            ->seeJsonStructure([
                    "resourceType",
                    "identifier",
                    "name",
                    "telecom",
                    "gender",
                    "birthDate",
                ]
            );
    }

    public function testUpdatePatient()
    {
        $json =  [
                    "id"        => 56,
                    "firstName" => "MMA",
                    "lastName"  => "WMA",
                    "gender"    => "male"
                  ];
        
        $patientId = 56;
        $this->json('PUT', '/fhir/Patient/'.$patientId, $json)
            ->seeJsonEquals([
                        "resourceType"  => "Patient",
                        "identifier"    => [[
                            "use"       => "usual",
                            "value"     => $json['id']
                        ]],
                        "name" => [[
                            "use"       => "usual",
                            "family"    => [$json["lastName"]],
                            "given"     => [$json["firstName"]]
                        ]],
                        "telecom" => [[
                            "system"    => "phone",
                            "value"     => "555-555-2003",
                            "use"       => "primary"
                        ], [
                            "system"    => "email",
                            "value"     => "",
                            "use"       => "primary"
                        ]],
                        "gender"        => $json['gender'],
                        "birthDate"     => "1955-01-06"
                ]
            );
    }

    public function testFindPatientById()
    {

        $patientId = 56;

        $this->get('/fhir/Patient/'.$patientId)
            ->seeJsonStructure([
                    "resourceType",
                    "identifier",
                    "name",
                    "telecom",
                    "gender",
                    "birthDate",
                ]
            );
    }


}
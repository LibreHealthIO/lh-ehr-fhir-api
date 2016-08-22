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
        $faker = new Faker\Generator();
        $this->post('/fhir/patient', [

                'first_name'  => $faker->name,
                'last_name'   => $faker->lastName,
                'email'       => $faker->email,
                'dateOfBirth' => $faker->unique()->dateTimeBetween($startDate = "-20 years", $endDate = "10 years")->format('Y-m-d'),
                'gender'      => 'Male',
                'phone'       => $faker->phoneNumber,
            ]
        )
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
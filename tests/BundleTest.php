<?php

use Illuminate\Http\Response;

class BundleTest extends TestCase
{
    // The setUp() and tearDown() template methods are run once for each test
    // // method (and on fresh instances) of the test case class.
    public function setUp()
    {

    }

    public function tearDown()
    {

    }

    public function testJsonPost()
    {
        // Post a bundle to the base-url, meaning /
        $path = __DIR__."/data";
        $data = file_get_contents( "$path/bundle.json");
        $response = $this->call( 'POST',
            '/fhir/',
            [],
            [],
            [],
            $headers = ['HTTP_CONTENT_TYPE' => 'application/json'],
            $data );
        echo $response;
    }

}
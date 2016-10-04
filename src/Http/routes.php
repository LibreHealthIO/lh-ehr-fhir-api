<?php

Route::group( [ 'middleware' => 'auth:api', 'prefix' => 'fhir' ], function () {

    // Get all patient's in logged-in user's group
    Route::get('Patients', '\LibreEHR\FHIR\Http\Controllers\PatientController@showGroup');

    // Get a specific Patient Resource using ID
    // - If no id is specified get the master patient,
    Route::get('Patient/{id?}', '\LibreEHR\FHIR\Http\Controllers\PatientController@index');

    // Create a Patient by POSTing a Patient Resource
    Route::post('Patient', '\LibreEHR\FHIR\Http\Controllers\PatientController@post');

    // Update a Patient
    Route::put('Patient', '\LibreEHR\FHIR\Http\Controllers\PatientController@update');

    // Delete a Patient
    Route::delete('Patient/{id}', '\LibreEHR\FHIR\Http\Controllers\PatientController@destroy');

    // Appointment?patient=1&date=lt2016-09-30&dat=gt2016-08-30 Gets all appointments for September 2016 where patient ID == 1
    Route::get('Appointment', '\LibreEHR\FHIR\Http\Controllers\AppointmentController@index');

    // Create an Appointment by posting an Appointment Resource
    Route::post('Appointment', '\LibreEHR\FHIR\Http\Controllers\AppointmentController@post');

    // Update an Appointment by posting an Appointment Resource
    Route::put('Appointment', '\LibreEHR\FHIR\Http\Controllers\AppointmentController@put');
    Route::delete('Appointment/{id}', '\LibreEHR\FHIR\Http\Controllers\AppointmentController@destroy');

    // Get Slots for a provider Slot?provider=1&date=lt2020-09-30&date=gt2014-08-30
    Route::get('Slot/{slotDate?}', '\LibreEHR\FHIR\Http\Controllers\SlotController@index');

    // Post a Blundle of Resources to the base to create a bunch of resources
    Route::post('/', '\LibreEHR\FHIR\Http\Controllers\BundleController@store');

    // Get a ValueSet resource
    Route::get('ValueSet/{id}', '\LibreEHR\FHIR\Http\Controllers\ValuesetController@show');
});

Route::resource('document', '\LibreEHR\FHIR\Http\Controllers\DocumentController');



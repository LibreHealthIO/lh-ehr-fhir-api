<?php
Route::group( [ 'middleware' => 'auth:api', 'prefix' => 'fhir' ], function () {

    // See resource routes in Laravel Docs
    Route::resource('Patient', '\LibreEHR\FHIR\Http\Controllers\PatientController');
    Route::resource('Patients', '\LibreEHR\FHIR\Http\Controllers\PatientController');
    Route::get('Patient/{id}', '\LibreEHR\FHIR\Http\Controllers\PatientController@show($id)');
    Route::post('Patient', '\LibreEHR\FHIR\Http\Controllers\PatientController@post');
    Route::put('Patient', '\LibreEHR\FHIR\Http\Controllers\PatientController@update');
    Route::delete('Patient/{id}', '\LibreEHR\FHIR\Http\Controllers\PatientController@destroy');

    Route::get('Appointment', '\LibreEHR\FHIR\Http\Controllers\AppointmentController@index');
    Route::post('Appointment', '\LibreEHR\FHIR\Http\Controllers\AppointmentController@post');
    Route::put('Appointment', '\LibreEHR\FHIR\Http\Controllers\AppointmentController@put');

    Route::get('Slot/{slotDate?}', '\LibreEHR\FHIR\Http\Controllers\SlotController@index');
    Route::get('Schedule/{scheduleDate?}', '\LibreEHR\FHIR\Http\Controllers\ScheduleController@index');

    Route::resource('conformance', '\LibreEHR\FHIR\Http\Controllers\ConformanceController');
    Route::resource('metadata', '\LibreEHR\FHIR\Http\Controllers\ConformanceController');

    Route::get('/', '\LibreEHR\FHIR\Http\Controllers\BundleController@index');
    Route::post('/', '\LibreEHR\FHIR\Http\Controllers\BundleController@store');
    Route::put('signup/update', 'Auth\RegisterController@signupUpdate');

    Route::resource('ValueSet', '\LibreEHR\FHIR\Http\Controllers\ValuesetController');
});
Route::resource('document', '\LibreEHR\FHIR\Http\Controllers\DocumentController');



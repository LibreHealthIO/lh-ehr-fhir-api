<?php

Route::group(['prefix' => 'fhir'], function () {

    // See resource routes in Laravel Docs
    Route::resource('Patient', '\LibreEHR\FHIR\Http\Controllers\PatientController');
    Route::resource('Patients', '\LibreEHR\FHIR\Http\Controllers\PatientController');

    Route::resource('get_schedule', '\LibreEHR\FHIR\Http\Controllers\AppointmentController@getSchedule');
    Route::resource('add_slot', '\LibreEHR\FHIR\Http\Controllers\AppointmentController@addSlot');
    Route::resource('check_status', '\LibreEHR\FHIR\Http\Controllers\AppointmentController@checkStatus');

    Route::resource('conformance', '\LibreEHR\FHIR\Http\Controllers\ConformanceController');
    Route::resource('metadata', '\LibreEHR\FHIR\Http\Controllers\ConformanceController');

    Route::get('/', '\LibreEHR\FHIR\Http\Controllers\BundleController@index');
    Route::post('/', '\LibreEHR\FHIR\Http\Controllers\BundleController@store' );
});

Route::resource('document', '\LibreEHR\FHIR\Http\Controllers\DocumentController');



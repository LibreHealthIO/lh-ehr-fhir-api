<?php

Route::group(['prefix' => 'fhir'], function () {

    // See resource routes in Laravel Docs
    Route::resource('Patient', '\LibreEHR\FHIR\Http\Controllers\PatientController');
    Route::resource('Patients', '\LibreEHR\FHIR\Http\Controllers\PatientController');
    Route::post('Patient', '\LibreEHR\FHIR\Http\Controllers\PatientController@post');

    Route::get('Appointment', '\LibreEHR\FHIR\Http\Controllers\AppointmentController@index');
    Route::post('Appointment', '\LibreEHR\FHIR\Http\Controllers\AppointmentController@index');
    Route::put('Appointment', '\LibreEHR\FHIR\Http\Controllers\AppointmentController@post');

    Route::get('Slot/{slotDate?}', '\LibreEHR\FHIR\Http\Controllers\SlotController@index');
    Route::get('Schedule/{scheduleDate?}', '\LibreEHR\FHIR\Http\Controllers\ScheduleController@index');

    Route::resource('conformance', '\LibreEHR\FHIR\Http\Controllers\ConformanceController');
    Route::resource('metadata', '\LibreEHR\FHIR\Http\Controllers\ConformanceController');

    Route::get('/', '\LibreEHR\FHIR\Http\Controllers\BundleController@index');
    Route::post('/', '\LibreEHR\FHIR\Http\Controllers\BundleController@store' );
});

Route::resource('document', '\LibreEHR\FHIR\Http\Controllers\DocumentController');



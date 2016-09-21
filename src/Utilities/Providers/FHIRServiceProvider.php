<?php

namespace LibreEHR\FHIR\Utilities\Providers;


use Illuminate\Support\ServiceProvider;

class FHIRServiceProvider extends ServiceProvider
{
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // Bind the LibreEHR implementations to the interface

        $this->app->bind('LibreEHR\Core\Contracts\FinderInterface', 'LibreEHR\Core\Emr\Finders\Finder');


        // Set up Patient binding
        $this->app->bind(
            'LibreEHR\Core\Contracts\PatientInterface',
            'LibreEHR\Core\Emr\Eloquent\PatientData',
            function ($app) {
                return new \LibreEHR\Core\Emr\Eloquent\PatientData();
            }
        );

        // Set up Appointment binding
        $this->app->bind(
            'LibreEHR\Core\Contracts\AppointmentInterface',
            'LibreEHR\Core\Emr\Eloquent\AppointmentData',
            function ($app) {
                 return new \LibreEHR\Core\Emr\Eloquent\AppointmentData();
            }
        );

        // When AppointmentController needs Adapter Logic point IoC to give the FHIRScheduleAdapter
        $this->app->when('LibreEHR\FHIR\Http\Controllers\SlotController')
            ->needs('LibreEHR\Core\Contracts\BaseAdapterInterface')
            ->give('LibreEHR\FHIR\Adapters\FHIRSlotAdapter');

        // When Adapter needs Repository Logic point IoC to give the AppointmentRepository
        $this->app->when('LibreEHR\FHIR\Adapters\FHIRSlotAdapter')
            ->needs('LibreEHR\Core\Contracts\RepositoryInterface')
            ->give('LibreEHR\Core\Emr\Repositories\AppointmentRepository');

        // When AppointmentController needs Adapter Logic point IoC to give the FHIRScheduleAdapter
        $this->app->when('LibreEHR\FHIR\Http\Controllers\ScheduleController')
            ->needs('LibreEHR\Core\Contracts\BaseAdapterInterface')
            ->give('LibreEHR\FHIR\Adapters\FHIRScheduleAdapter');

        // When Adapter needs Repository Logic point IoC to give the AppointmentRepository
        $this->app->when('LibreEHR\FHIR\Adapters\FHIRScheduleAdapter')
            ->needs('LibreEHR\Core\Contracts\RepositoryInterface')
            ->give('LibreEHR\Core\Emr\Repositories\AppointmentRepository');

        // When AppointmentController needs Adapter Logic point IoC to give the FHIRSlotAdapter
        $this->app->when('LibreEHR\FHIR\Http\Controllers\SlotController')
            ->needs('LibreEHR\Core\Contracts\BaseAdapterInterface')
            ->give('LibreEHR\FHIR\Adapters\FHIRSlotAdapter');

        // When Adapter needs Repository Logic point IoC to give the AppointmentRepository
        $this->app->when('LibreEHR\FHIR\Adapters\FHIRSlotAdapter')
            ->needs('LibreEHR\Core\Contracts\RepositoryInterface')
            ->give('LibreEHR\Core\Emr\Repositories\AppointmentRepository');

        // When AppointmentController needs Adapter Logic point IoC to give the FHIRAppointmentAdapter
        $this->app->when('LibreEHR\FHIR\Http\Controllers\AppointmentController')
            ->needs('LibreEHR\Core\Contracts\BaseAdapterInterface')
            ->give('LibreEHR\FHIR\Adapters\FHIRAppointmentAdapter');

        // When Adapter needs Repository Logic point IoC to give the AppointmentRepository
        $this->app->when('LibreEHR\FHIR\Adapters\FHIRAppointmentAdapter')
            ->needs('LibreEHR\Core\Contracts\RepositoryInterface')
            ->give('LibreEHR\Core\Emr\Repositories\AppointmentRepository');

        // When AppointmentController needs Adapter Logic point IoC to give the FHIRProfileAdapter
        $this->app->when('LibreEHR\FHIR\Http\Controllers\ProfileController')
            ->needs('LibreEHR\Core\Contracts\BaseAdapterInterface')
            ->give('LibreEHR\FHIR\Adapters\FHIRProfileAdapter');

        // When Adapter needs Repository Logic point IoC to give the ProfileRepository
        $this->app->when('LibreEHR\FHIR\Adapters\FHIRProfileAdapter')
            ->needs('LibreEHR\Core\Contracts\RepositoryInterface')
            ->give('LibreEHR\Core\Emr\Repositories\ProfileRepository');


        // When PatientController needs Adapter Logic point IoC to give the FHIRPatientAdapter
        $this->app->when('LibreEHR\FHIR\Http\Controllers\PatientController')
            ->needs('LibreEHR\Core\Contracts\BaseAdapterInterface')
            ->give('LibreEHR\FHIR\Adapters\FHIRPatientAdapter');

        // When Adapter needs Repository Logic point IoC to give the PatientRepository
        $this->app->when('LibreEHR\FHIR\Adapters\FHIRPatientAdapter')
            ->needs('LibreEHR\Core\Contracts\RepositoryInterface')
            ->give('LibreEHR\Core\Emr\Repositories\PatientRepository');


        $this->app->when('LibreEHR\FHIR\Http\Controllers\BundleController')
            ->needs('LibreEHR\Core\Contracts\BaseAdapterInterface')
            ->give('LibreEHR\FHIR\Adapters\FHIRBundleAdapter');


        // Set up document binding
        $this->app->bind(
            'LibreEHR\Core\Contracts\DocumentRepositoryInterface',
            'LibreEHR\Core\Emr\Repositories\DocumentRepository'
        );
        $this->app->bind(
            'LibreEHR\Core\Contracts\DocumentInterface',
            'LibreEHR\Core\Emr\Eloquent\Document',
            function ($app) {
                return new \LibreEHR\Core\Emr\Eloquent\Document();
            }
        );


        // Set up Audit Event binding
        $this->app->bind(
            'LibreEHR\Core\Contracts\AuditEventRepositoryInterface',
            'LibreEHR\Core\Emr\Repositories\AuditEventRepository'
        );
        $this->app->bind(
            'LibreEHR\Core\Contracts\AuditEventInterface',
            'LibreEHR\Core\Emr\Eloquent\AuditEvent',
            function ($app) {
                return new \LibreEHR\Core\Emr\Eloquent\AuditEvent();
            }
        );

        $this->app->bind(
            'LibreEHR\Core\Contracts\AuditEventAdapterInterface',
            'LibreEHR\FHIR\Adapters\FHIRAuditEventAdapter'
        );

        // This will load routes file at vendor/[vendor]/[package]/src/Http/routes.php
        // and prepend it with Foo\Http\Controllers namespace
        $this->app['router']->group(['namespace' => 'LibreEHR\FHIR\Http\Controllers'], function () {
            require __DIR__ . '/../../Http/routes.php';
        });
    }
}

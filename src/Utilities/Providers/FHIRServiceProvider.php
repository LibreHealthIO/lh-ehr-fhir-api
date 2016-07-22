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
        // Bind the OpenEMR implementations to the interface
        $this->app->bind('LibreEHR\Core\Contracts\PatientRepositoryInterface', 'LibreEHR\Core\Emr\Repositories\PatientRepository');
        $this->app->bind('LibreEHR\Core\Contracts\PatientFinderInterface', 'LibreEHR\Core\Emr\Finders\PatientFinder');
        $this->app->bind('LibreEHR\Core\Contracts\PatientInterface', 'LibreEHR\Core\Emr\Eloquent\PatientData', function( $app ) {
            return new \LibreEHR\Core\Emr\Eloquent\PatientData();
        });

        $this->app->bind('LibreEHR\Core\Contracts\DocumentRepositoryInterface', 'LibreEHR\Core\Emr\Repositories\DocumentRepository');
        $this->app->bind('LibreEHR\Core\Contracts\DocumentInterface', 'LibreEHR\Core\Emr\Eloquent\Document', function( $app ) {
            return new \LibreEHR\Core\Emr\Eloquent\Document();
        });

        $this->app->bind('LibreEHR\Core\Contracts\AuditEventRepositoryInterface', 'LibreEHR\Core\Emr\Repositories\AuditEventRepository');
        $this->app->bind('LibreEHR\Core\Contracts\AuditEventInterface', 'LibreEHR\Core\Emr\Eloquent\AuditEvent', function( $app ) {
            return new \LibreEHR\Core\Emr\Eloquent\AuditEvent();
        });

        $this->app->bind('LibreEHR\Core\Contracts\AuditEventAdapterInterface', 'LibreEHR\FHIR\Adapters\FHIRAuditEventAdapter');
        $this->app->bind('LibreEHR\Core\Contracts\PatientAdapterInterface', 'LibreEHR\FHIR\Adapters\FHIRPatientAdapter');
        $this->app->bind('LibreEHR\Core\Contracts\BundleAdapterInterface', 'LibreEHR\FHIR\Adapters\FHIRBundleAdapter');
        $this->app->bind('LibreEHR\Core\Contracts\PatientRepositoryInterface', 'LibreEHR\Core\Emr\Repositories\PatientRepository');

        // This will load routes file at vendor/[vendor]/[package]/src/Http/routes.php
        // and prepend it with Foo\Http\Controllers namespace
        $this->app['router']->group(['namespace' => 'LibreEHR\FHIR\Http\Controllers'], function () {
            require __DIR__ . '/../../Http/routes.php';
        });
    }
}
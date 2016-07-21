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
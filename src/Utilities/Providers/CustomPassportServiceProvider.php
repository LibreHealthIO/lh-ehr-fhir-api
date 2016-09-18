<?php

namespace LibreEHR\FHIR\Utilities\Providers;

use LibreEHR\FHIR\Auth\CustomPasswordGrant;
use Laravel\Passport\PassportServiceProvider;
use Laravel\Passport\Passport;
use Laravel\Passport\Bridge\ClientRepository;
use Laravel\Passport\Bridge\AccessTokenRepository;
use Laravel\Passport\Bridge\ScopeRepository;
use Laravel\Passport\Bridge\UserRepository;
use Laravel\Passport\Bridge\RefreshTokenRepository;
use Illuminate\Support\Facades\Route;

use LibreEHR\FHIR\Auth\CustomAuthServer;

class CustomPassportServiceProvider extends PassportServiceProvider
{
    /**
     * Make the authorization service instance.
     *
     * @return AuthorizationServer
     */
    public function makeAuthorizationServer()
    {
        return new CustomAuthServer(
            $this->app->make(ClientRepository::class),
            $this->app->make(AccessTokenRepository::class),
            $this->app->make(ScopeRepository::class),
            'file://'.storage_path('oauth-private.key'),
            'file://'.storage_path('oauth-public.key')
        );
    }

    /**
     * Create and configure a Password grant instance.
     *
     * @return PasswordGrant
     */
    protected function makePasswordGrant()
    {
        $grant = new CustomPasswordGrant(
            $this->app->make(UserRepository::class),
            $this->app->make(RefreshTokenRepository::class)
        );

        $grant->setRefreshTokenTTL(Passport::refreshTokensExpireIn());

        return $grant;
    }

    public function register()
    {
        parent::register();

        Passport::routes();

        Route::group([
            'middleware' => 'api',
            'namespace' => '\LibreEHR\FHIR\Http\Controllers',
            'prefix' => 'fhir',
        ], function ($router) {
            require base_path('vendor/libre-ehr/fhir/src/Http/routes.php');
        });

        Route::group([
            'middleware' => 'api',
            'namespace' => '\LibreEHR\FHIR\Http\Controllers',
            'prefix' => '',
        ], function ($router) {
            require base_path('vendor/libre-ehr/fhir/src/Http/authRoutes.php');
        });

    }
}

<?php

namespace LibreEHR\FHIR\Auth;

use Illuminate\Support\Facades\Auth;
use League\OAuth2\Server\ResponseTypes\BearerTokenResponse;
use League\OAuth2\Server\Entities\AccessTokenEntityInterface;
use LibreEHR\FHIR\Http\Controllers\Auth\AuthModel\User;

class CustomBearerTokenResponse extends BearerTokenResponse
{
    /**
     * Add custom fields to your Bearer Token response here, then override
     * AuthorizationServer::getResponseType() to pull in your version of
     * this class rather than the default.
     *
     * @param AccessTokenEntityInterface $accessToken
     * @return array
     */
    protected function getExtraParams(AccessTokenEntityInterface $accessToken)
    {

        $user = User::where( 'id', $accessToken->getUserIdentifier() )->first();

        $user->loginCount = $user->loginCount + 1;
        $user->save();

        // Custom parameters for /signin can be added here
        $response = ['firstTimeLogin' => 0 ];
        if ( $user->loginCount == 1 ) {
            $response = ['firstTimeLogin' => 1 ];
        }

        return $response;
    }
}
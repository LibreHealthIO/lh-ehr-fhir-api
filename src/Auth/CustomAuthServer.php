<?php

namespace LibreEHR\FHIR\Auth;

use League\OAuth2\Server\AuthorizationServer;
use League\OAuth2\Server\ResponseTypes\ResponseTypeInterface;

class CustomAuthServer extends AuthorizationServer
{
    /**
     * Get the token type that grants will return in the HTTP response.
     *
     * @return ResponseTypeInterface
     */
    protected function getResponseType()
    {
        if ($this->responseType instanceof ResponseTypeInterface === false) {
            $this->responseType = new CustomBearerTokenResponse();
        }

        $this->responseType->setPrivateKey($this->privateKey);

        return $this->responseType;
    }
}

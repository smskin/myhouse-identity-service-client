<?php

namespace SMSkin\IdentityServiceClient\Api\Requests;

use SMSkin\IdentityServiceClient\Api\Support\ApiClient;
use function app;

abstract class BaseRequest
{
    protected static function getClient(): ApiClient
    {
        return app(ApiClient::class);
    }
}

<?php

namespace MyHouse\IdentityServiceClient\Api\Requests;

use MyHouse\IdentityServiceClient\Api\Support\ApiClient;
use function app;

abstract class BaseRequest
{
    protected static function getClient(): ApiClient
    {
        return app(ApiClient::class);
    }
}

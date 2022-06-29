<?php

namespace MyHouse\IdentityServiceClient\Traits;

use MyHouse\IdentityServiceClient\Models\Contracts\HasIdentity;

trait ClassFromConfig
{
    public static function getUserModelClass(): string
    {
        return config('identity-service-client.classes.models.user');
    }

    public static function getUserModel(): HasIdentity
    {
        return app(self::getUserModelClass());
    }
}
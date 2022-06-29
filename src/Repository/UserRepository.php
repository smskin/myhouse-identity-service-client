<?php

namespace MyHouse\IdentityServiceClient\Repository;

use MyHouse\IdentityServiceClient\Api\DTO\Identity\RIdentity;
use MyHouse\IdentityServiceClient\Models\Contracts\HasIdentity;
use MyHouse\IdentityServiceClient\Traits\ClassFromConfig;

class UserRepository
{
    use ClassFromConfig;

    public static function create(RIdentity $identity): HasIdentity
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $user = self::getUserModel()::firstOrCreate([
            'identity_uuid' => $identity->uuid
        ]);
        $user->setIdentity($identity);
        return $user;
    }
}

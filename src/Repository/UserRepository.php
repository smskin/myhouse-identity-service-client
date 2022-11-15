<?php

namespace SMSkin\IdentityServiceClient\Repository;

use Exception;
use SMSkin\IdentityServiceClient\Api\DTO\Identity\RIdentity;
use SMSkin\IdentityServiceClient\Exceptions\MutexException;
use SMSkin\IdentityServiceClient\Models\Contracts\HasIdentity;
use SMSkin\IdentityServiceClient\Traits\ClassFromConfig;
use SyncMutex;

class UserRepository
{
    use ClassFromConfig;

    /**
     * @throws MutexException
     */
    public static function create(RIdentity $identity): HasIdentity
    {
        $key = md5(static::class . '@create') . '_' . $identity->uuid;
        try {
            $mutex = new SyncMutex($key);
        } catch (Exception $exception) {
            throw new MutexException($exception->getMessage(), $exception->getCode(), $exception);
        }
        if (!$mutex->lock(10000)) {
            throw new MutexException('Can\'t lock (' . static::class . '@create) within 10 seconds');
        }

        /** @noinspection PhpUndefinedMethodInspection */
        $user = self::getUserModel()::firstOrCreate([
            'identity_uuid' => $identity->uuid
        ]);
        $user->setIdentity($identity);
        return $user;
    }
}

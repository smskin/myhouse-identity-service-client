<?php

namespace MyHouse\IdentityServiceClient\Guards\Jwt\Contracts;

use Illuminate\Contracts\Auth\Guard;
use MyHouse\IdentityServiceClient\Guards\Jwt\Exceptions\JWTException;
use MyHouse\IdentityServiceClient\Guards\Jwt\Exceptions\UserNotDefinedException;
use MyHouse\IdentityServiceClient\Guards\Jwt\JWT;
use MyHouse\IdentityServiceClient\Models\Contracts\HasIdentity;

interface BaseGuard extends Guard
{
    public function getToken(): ?JWT;

    /**
     * @return HasIdentity
     * @throws UserNotDefinedException
     */
    public function userOrFail(): HasIdentity;

    /**
     * @return void
     * @throws JWTException
     */
    public function logout(): void;

    public function attempt(array $credentials = [], $remember = false): bool;
}

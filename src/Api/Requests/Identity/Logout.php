<?php

namespace MyHouse\IdentityServiceClient\Api\Requests\Identity;

use GuzzleHttp\Exception\GuzzleException;
use MyHouse\IdentityServiceClient\Api\Requests\BaseRequest;

class Logout extends BaseRequest
{
    /**
     * @param string $token
     * @throws GuzzleException
     */
    public static function execute(string $token): void
    {
        $client = self::getClient();
        $client->setAccessToken($token);
        $client->get(
            '/api/identity/logout'
        );
    }
}

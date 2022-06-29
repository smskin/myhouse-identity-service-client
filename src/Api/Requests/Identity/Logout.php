<?php

namespace SMSkin\IdentityServiceClient\Api\Requests\Identity;

use GuzzleHttp\Exception\GuzzleException;
use SMSkin\IdentityServiceClient\Api\Requests\BaseRequest;

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

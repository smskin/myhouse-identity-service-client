<?php

namespace SMSkin\IdentityServiceClient\Api\Requests\Auth\Jwt;

use GuzzleHttp\Exception\GuzzleException;
use SMSkin\IdentityServiceClient\Api\DTO\Auth\RJwt;
use SMSkin\IdentityServiceClient\Api\Requests\BaseRequest;

class Refresh extends BaseRequest
{
    /**
     * @param string $refreshToken
     * @return RJwt
     * @throws GuzzleException
     */
    public static function execute(string $refreshToken): RJwt
    {
        $client = self::getClient();
        $response = $client->post('/api/jwt/refresh', [
            'token' => $refreshToken
        ]);

        $data = json_decode($response->getBody()->getContents(), true);
        return (new RJwt())->fromArray($data);
    }
}

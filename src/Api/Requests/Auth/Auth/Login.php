<?php

namespace SMSkin\IdentityServiceClient\Api\Requests\Auth\Auth;

use GuzzleHttp\Exception\GuzzleException;
use SMSkin\IdentityServiceClient\Api\DTO\Auth\RJwt;
use SMSkin\IdentityServiceClient\Api\Requests\BaseRequest;

class Login extends BaseRequest
{
    /**
     * @param string $phone
     * @param string $password
     * @return RJwt
     * @throws GuzzleException
     */
    public static function execute(string $phone, string $password): RJwt
    {
        $client = self::getClient();
        $response = $client->post(
            '/api/auth/email/authorize',
            [
                'phone' => $phone,
                'password' => $password
            ]
        );

        $data = json_decode($response->getBody()->getContents(), true);
        return (new RJwt())->fromArray($data);
    }
}

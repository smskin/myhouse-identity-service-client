<?php

namespace MyHouse\IdentityServiceClient\Api\Requests\Auth\Auth;

use MyHouse\IdentityServiceClient\Api\DTO\ROperationResult;
use MyHouse\IdentityServiceClient\Api\Requests\BaseRequest;
use GuzzleHttp\Exception\GuzzleException;

class Validate extends BaseRequest
{
    /**
     * @param string $phone
     * @param string $password
     * @return bool
     * @throws GuzzleException
     */
    public static function execute(string $phone, string $password): bool
    {
        $client = self::getClient();
        $response = $client->post(
            '/api/auth/verify',
            [
                'phone' => $phone,
                'password' => $password
            ]
        );

        $data = json_decode($response->getBody()->getContents(), true);
        $model = (new ROperationResult)->fromArray($data);
        return $model->result;
    }
}

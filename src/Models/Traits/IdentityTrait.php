<?php

namespace MyHouse\IdentityServiceClient\Models\Traits;

use MyHouse\IdentityServiceClient\Api\DTO\Identity\RIdentity;

trait IdentityTrait
{
    protected ?RIdentity $identity;

    /**
     * @param RIdentity $identity
     * @return void
     */
    public function setIdentity(RIdentity $identity): void
    {
        $this->identity = $identity;
    }

    /**
     * @return ?RIdentity
     */
    public function getIdentity(): ?RIdentity
    {
        return $this->identity;
    }
}

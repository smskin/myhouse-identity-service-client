<?php

namespace SMSkin\IdentityServiceClient\Models\Traits;

use SMSkin\IdentityServiceClient\Api\DTO\Identity\RIdentity;

trait IdentityTrait
{
    protected ?RIdentity $identity = null;

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

    public function hasIdentity(): bool
    {
        return !is_null($this->identity);
    }
}

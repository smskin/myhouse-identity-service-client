<?php

namespace MyHouse\IdentityServiceClient\Models\Contracts;

use Illuminate\Contracts\Queue\QueueableEntity;
use MyHouse\IdentityServiceClient\Api\DTO\Identity\RIdentity;

interface HasIdentity extends QueueableEntity
{
    public function setIdentity(RIdentity $identity): void;

    public function getIdentity(): ?RIdentity;
}

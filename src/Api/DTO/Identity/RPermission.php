<?php

namespace SMSkin\IdentityServiceClient\Api\DTO\Identity;

use SMSkin\LaravelSupport\Contracts\Arrayable;

class RPermission implements Arrayable
{
    public string $id;
    public string $name;

    public function fromArray(array $data): static
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        return $this;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}
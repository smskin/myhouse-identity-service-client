<?php

namespace SMSkin\IdentityServiceClient\Api\DTO\Identity;

use Carbon\Carbon;
use SMSkin\LaravelSupport\Contracts\Arrayable;

class RIdentity implements Arrayable
{
    public string $uuid;

    public string $email;

    public string $phone;

    public ?string $name;

    public ?string $gender;

    public ?int $age;

    public ?Carbon $createdAt;

    public ?Carbon $updatedAt;

    public function toArray(): array
    {
        return [
            'uuid' => $this->uuid,
            'email' => $this->email,
            'phone' => $this->phone,
            'name' => $this->name,
            'gender' => $this->gender,
            'age' => $this->age,
            'createdAt' => $this->createdAt?->toIso8601String(),
            'updatedAt' => $this->updatedAt?->toIso8601String()
        ];
    }

    public function fromArray(array $data): static
    {
        $this->uuid = $data['uuid'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->name = $data['name'];
        $this->gender = $data['gender'];
        $this->age = $data['age'];
        $this->createdAt = $data['createdAt'] ? Carbon::make($data['createdAt']) : null;
        $this->updatedAt = $data['updatedAt'] ? Carbon::make($data['updatedAt']) : null;
        return $this;
    }
}

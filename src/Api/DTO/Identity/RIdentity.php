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

    public ?array $role;

    public ?array $permissions;

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
            'role' => $this->role,
            'permissions' => $this->permissions,
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
        $this->role = $data['role'];
        $this->permissions = $data['permissions'];
        $this->createdAt = $data['createdAt'] ? Carbon::make($data['createdAt']) : null;
        $this->updatedAt = $data['updatedAt'] ? Carbon::make($data['updatedAt']) : null;
        return $this;
    }

    /**
     * @param string $uuid
     * @return RIdentity
     */
    public function setUuid(string $uuid): RIdentity
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @param string $email
     * @return RIdentity
     */
    public function setEmail(string $email): RIdentity
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $phone
     * @return RIdentity
     */
    public function setPhone(string $phone): RIdentity
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param string|null $name
     * @return RIdentity
     */
    public function setName(?string $name): RIdentity
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string|null $gender
     * @return RIdentity
     */
    public function setGender(?string $gender): RIdentity
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @param int|null $age
     * @return RIdentity
     */
    public function setAge(?int $age): RIdentity
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @param array|null $role
     * @return $this
     */
    public function setRole(?array $role): RIdentity
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @param array|null $role
     * @return $this
     */
    public function setPermissions(?array $permissions): RIdentity
    {
        $this->permissions = $permissions;
        return $this;
    }

    /**
     * @param Carbon|null $createdAt
     * @return RIdentity
     */
    public function setCreatedAt(?Carbon $createdAt): RIdentity
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @param Carbon|null $updatedAt
     * @return RIdentity
     */
    public function setUpdatedAt(?Carbon $updatedAt): RIdentity
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}

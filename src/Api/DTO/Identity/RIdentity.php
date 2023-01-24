<?php

namespace SMSkin\IdentityServiceClient\Api\DTO\Identity;

use Carbon\Carbon;
use SMSkin\IdentityServiceClient\Enums\GenderEnum;
use SMSkin\LaravelSupport\Contracts\Arrayable;

class RIdentity implements Arrayable
{
    public string $uuid;

    public string $email;

    public string $phone;

    public string|null $name;

    public GenderEnum|null $gender;

    public Carbon|null $birthdate;

    public int|null $age;

    public RRole|null $role;

    public bool $identityConfirmed;

    public string|null $surname;

    public string|null $patronymic;

    public bool|null $withoutPatronymic;

    public string|null $avatar;

    public Carbon|null $createdAt;

    public Carbon|null $updatedAt;

    public string|null $fullName;

    public function toArray(): array
    {
        return [
            'uuid' => $this->uuid,
            'email' => $this->email,
            'phone' => $this->phone,
            'name' => $this->name,
            'surname' => $this->surname,
            'patronymic' => $this->patronymic,
            'withoutPatronymic' => $this->withoutPatronymic,
            'identityConfirmed' => $this->identityConfirmed,
            'avatar' => $this->avatar,
            'fullName' => $this->fullName,
            'gender' => $this->gender?->value,
            'birthdate' => $this->birthdate?->toDateString(),
            'age' => $this->age,
            'role' => $this->role?->toArray(),
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
        $this->surname = $data['surname'];
        $this->patronymic = $data['patronymic'];
        $this->withoutPatronymic = $data['withoutPatronymic'];
        $this->identityConfirmed = $data['identityConfirmed'];
        $this->avatar = $data['avatar'];
        $this->fullName = $data['fullName'];
        $this->gender = $data['gender'] ? GenderEnum::from($data['gender']) : null;
        $this->birthdate = $data['birthdate'] ? Carbon::make($data['birthdate']) : null;
        $this->age = $data['age'];
        $this->role = $data['role'] ? (new RRole())->fromArray($data['role']) : null;
        $this->createdAt = $data['createdAt'] ? Carbon::make($data['createdAt']) : null;
        $this->updatedAt = $data['updatedAt'] ? Carbon::make($data['updatedAt']) : null;
        return $this;
    }

    /**
     * @param string $uuid
     * @return RIdentity
     */
    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * @param string $email
     * @return RIdentity
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $phone
     * @return RIdentity
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param string|null $name
     * @return RIdentity
     */
    public function setName(string|null $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string|null $surname
     * @return RIdentity
     */
    public function setSurname(string|null $surname): self
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @param string|null $patronymic
     * @return RIdentity
     */
    public function setPatronymic(string|null $patronymic): self
    {
        $this->patronymic = $patronymic;
        return $this;
    }

    /**
     * @param bool|null $withoutPatronymic
     * @return RIdentity
     */
    public function setWithoutPatronymic(bool|null $withoutPatronymic): self
    {
        $this->withoutPatronymic = $withoutPatronymic;
        return $this;
    }

    /**
     * @param string|null $fullName
     * @return RIdentity
     */
    public function setFullName(string|null $fullName): self
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * @param GenderEnum|null $gender
     * @return RIdentity
     */
    public function setGender(GenderEnum|null $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @param int|null $age
     * @return RIdentity
     */
    public function setAge(int|null $age): self
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @param Carbon|null $createdAt
     * @return RIdentity
     */
    public function setCreatedAt(Carbon|null $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @param Carbon|null $updatedAt
     * @return RIdentity
     */
    public function setUpdatedAt(Carbon|null $updatedAt): self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @param RRole|null $role
     * @return RIdentity
     */
    public function setRole(RRole|null $role): self
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @param string $avatar
     * @return RIdentity
     */
    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;
        return $this;
    }

    public function setIdentityConfirmed(bool $identityConfirmed): self
    {
        $this->identityConfirmed = $identityConfirmed;
        return $this;
    }

    /**
     * @param Carbon|null $birthdate
     * @return RIdentity
     */
    public function setBirthdate(Carbon|null $birthdate): self
    {
        $this->birthdate = $birthdate;
        return $this;
    }
}

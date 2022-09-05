<?php

namespace SMSkin\IdentityServiceClient\Api\DTO\Identity;

use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use SMSkin\LaravelSupport\Contracts\Arrayable;

class RIdentity implements Arrayable
{
    public string $uuid;

    public string $email;

    public string $phone;

    public ?string $name;

    public ?string $gender;

    public ?int $age;

    public ?RRole $role;

    public bool $identityConfirmed;

    public ?string $surname;

    public ?string $patronymic;

    public ?bool $withoutPatronymic;

    public ?string $avatar;

    public ?Carbon $createdAt;

    public ?Carbon $updatedAt;
    public ?string $fio;

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
            'fio' => $this->fio,
            'gender' => $this->gender,
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
        $this->fio = $data['fio'];
        $this->gender = $data['gender'];
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
     * @param string|null $surname
     * @return RIdentity
     */
    public function setSurname(?string $surname): RIdentity
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @param string|null $patronymic
     * @return RIdentity
     */
    public function setPatronymic(?string $patronymic): RIdentity
    {
        $this->patronymic = $patronymic;
        return $this;
    }

    /**
     * @param bool|null $withoutPatronymic
     * @return RIdentity
     */
    public function setWithoutPatronymic(?bool $withoutPatronymic): RIdentity
    {
        $this->withoutPatronymic = $withoutPatronymic;
        return $this;
    }

    /**
     * @param string|null $fio
     * @return RIdentity
     */
    public function setFio(?string $fio): RIdentity
    {
        $this->fio = $fio;
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

    /**
     * @param RRole|null $role
     * @return RIdentity
     */
    public function setRole(?RRole $role): RIdentity
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @param string $avatar
     * @return RIdentity
     */
    public function setAvatar(string $avatar): RIdentity
    {
        $this->avatar = $avatar;
        return $this;
    }

    public function setIdentityConfirmed(bool $identityConfirmed): RIdentity
    {
        $this->identityConfirmed = $identityConfirmed;
        return $this;
    }
}

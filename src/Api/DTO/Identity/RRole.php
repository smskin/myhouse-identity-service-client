<?php

namespace SMSkin\IdentityServiceClient\Api\DTO\Identity;

use Illuminate\Support\Collection;
use SMSkin\LaravelSupport\Contracts\Arrayable;

class RRole implements Arrayable
{
    public string $id;

    /**
     * @var Collection<RPermission>
     */
    public Collection $permissions;

    public function fromArray(array $data): static
    {
        $this->id = $data['id'];
        $this->permissions = collect($data['permissions'])->map(static function ($data) {
            return (new RPermission())->fromArray($data);
        });
        return $this;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'permissions' => $this->permissions->toArray()
        ];
    }
}
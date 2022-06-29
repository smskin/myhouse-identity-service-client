<?php

namespace MyHouse\IdentityServiceClient\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use MyHouse\IdentityServiceClient\Models\Contracts\HasIdentity;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use MyHouse\IdentityServiceClient\Models\Traits\IdentityTrait;

class User extends Authenticatable implements HasIdentity, AuthenticatableContract
{
    use IdentityTrait;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'identity_uuid'
    ];
}
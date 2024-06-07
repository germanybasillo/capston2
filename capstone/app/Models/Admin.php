<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;

class Admin extends AuthenticatableUser implements Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];
}

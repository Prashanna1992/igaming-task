<?php

namespace App\Models\Api;

use App\Models\User as UserModel;


class User extends UserModel
{
    protected $visible = ['name', 'email', 'token'];


    protected $hidden = ['id', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'];
}

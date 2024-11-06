<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    protected $fillable = ['email', 'password'];
    protected $hidden = ['password'];
}

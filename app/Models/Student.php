<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;

class Student extends User
{
    protected $fillable=[
        'name',
        'email',
        'password',
        'is_active',
    ];
}

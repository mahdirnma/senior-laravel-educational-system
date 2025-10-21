<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;

class Teacher extends User
{
    protected $fillable=[
        'name',
        'email',
        'password',
        'is_active',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}

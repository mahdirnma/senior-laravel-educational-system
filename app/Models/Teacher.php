<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable=[
        'name',
        'email',
        'password',
        'is_active',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}

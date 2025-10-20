<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=[
        'title',
        'description',
        'start_date',
        'end_date',
        'year',
        'is_active',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }
}

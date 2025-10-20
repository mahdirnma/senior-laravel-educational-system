<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lesson::create([
            'title' => 'lesson 1',
            'description' => 'lorem ipsum 1',
            'capacity' => '25',
            'course_id' => '1',
        ]);
        Lesson::create([
            'title' => 'lesson 2',
            'description' => 'lorem ipsum 2',
            'capacity' => '30',
            'course_id' => '2',
        ]);

    }
}

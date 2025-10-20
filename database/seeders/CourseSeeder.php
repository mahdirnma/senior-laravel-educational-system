<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'title' => 'course 1',
            'description' => 'lorem ipsum 1',
            'start_date' => '2025-11-02',
            'end_date' => '2026-3-15',
            'year' => '2025',
        ]);
        Course::create([
            'title' => 'course 2',
            'description' => 'lorem ipsum 2',
            'start_date' => '2025-11-02',
            'end_date' => '2026-3-15',
            'year' => '2025',
        ]);


    }
}

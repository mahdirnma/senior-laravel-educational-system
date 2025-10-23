<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Field::create([
            'title' => 'field 1',
            'description' => 'lorem ipsum',
            'unitNumber'=>150,
            'branch'=>'branch 1',
            'type' => 'teacher',
        ]);
        Field::create([
            'title' => 'field 2',
            'description' => 'lorem ipsum2',
            'unitNumber'=>140,
            'branch'=>'branch 2',
            'type' => 'student',
        ]);

    }
}

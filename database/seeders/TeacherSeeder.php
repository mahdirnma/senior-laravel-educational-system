<?php

namespace Database\Seeders;

use App\Models\Field;
use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'name' => 'reza',
            'email' => 'reza@gmail.com',
            'field_id'=>Field::where('type','teacher')->first()->id,
            'password' => Hash::make('123'),
        ]);
        Teacher::create([
            'name' => 'nima',
            'email' => 'nima@gmail.com',
            'field_id'=>Field::where('type','teacher')->first()->id,
            'password' => Hash::make('123'),
        ]);

    }
}

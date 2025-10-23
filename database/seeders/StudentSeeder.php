<?php

namespace Database\Seeders;

use App\Models\Field;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'ali',
            'email' => 'ali@gmail.com',
            'field_id'=>Field::where('type','student')->first()->id,
            'password' => Hash::make('123'),
        ]);

    }
}

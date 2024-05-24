<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Garry Caber',
        //     'email' => 'garrypedrosa.31@gmail.com',
        // ]);
        Student::factory(10)->create();
        
        Student::all()->each(function ($student) {
            Subject::factory()->count(8)->create([
                'student_id' => $student->id
            ]);
        });
    }
}

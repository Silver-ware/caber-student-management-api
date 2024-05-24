<?php

namespace Database\Seeders;

use App\Models\Student;
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
        User::factory()->create([
            'name' => 'Garry Caber',
            'email' => 'garrypedrosa.31@gmail.com',
        ]);
        
        Student::factory(10)->create();
        Student::factory()->create([
            'firstname' => 'Garry Caber', 
            'lastname' => 'Caber',
            'birthdate' => '2003-09-18',
            'sex' => 'MALE',
            'address' => 'Brgy. Tinaogan Basey, Samar',
            'year' => 3,
            'course' => 'BSIT',
            'section' => 'B',
        ]);

        Student::factory()->create([
            'firstname' => 'Juan', 
            'lastname' => 'Ford',
            'birthdate' => '2001-05-07',
            'sex' => 'MALE',
            'address' => 'Brgy. San. Antonio Basey, Samar',
            'year' => 3,
            'course' => 'BSIT',
            'section' => 'A',
        ]);
    }
}

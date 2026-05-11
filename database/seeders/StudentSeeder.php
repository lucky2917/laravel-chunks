<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Students;
use Illuminate\Support\Facades\File;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path: 'database/json/student.json');
        $students=collect(json_decode($json));

        $students->each(function($student) {
            Students::updateOrCreate(
                [   
                    'name' => $student->name,
                    'email' => $student->email,
                    'age' => $student->age
                ], 
                (array) $student 
            );
        });
    }
}

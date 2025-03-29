<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\College;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $college1 = College::firstOrCreate([
            'name' => 'College of Engineering',
            'address' => '123 Engineering Lane',
        ]);
    
        $college2 = College::firstOrCreate([
            'name' => 'College of Science',
            'address' => '456 Science Street',
        ]);
    
        Student::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'dob' => '2000-01-01',
            'college_id' => $college1->id,
        ]);
    
        Student::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '0987654321',
            'dob' => '1999-05-15',
            'college_id' => $college2->id,
        ]);
    }
}

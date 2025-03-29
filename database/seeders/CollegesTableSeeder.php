<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\College;

class CollegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        College::create([
            'name' => 'College of Engineering',
            'address' => '123 Engineering Lane',
        ]);

        College::create([
            'name' => 'College of Science',
            'address' => '456 Science Street',
        ]);

        College::create([
            'name' => 'College of Arts',
            'address' => '789 Arts Avenue',
        ]);

        College::create([
            'name' => 'College of Business',
            'address' => '321 Business Boulevard',
        ]);
    }
}

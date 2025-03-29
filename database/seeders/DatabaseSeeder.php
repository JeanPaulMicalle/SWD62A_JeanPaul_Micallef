<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Call your seeders here
        $this->call([
            CollegesTableSeeder::class,
            StudentsTableSeeder::class,
        ]);
    }
}
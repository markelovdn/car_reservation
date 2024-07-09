<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            EmployeePositionSeeder::class,
            EmployeeSeeder::class,
            CarComfortCategorySeeder::class,
            DriverSeeder::class,
            CarSeeder::class,
            CarComfortEmployeePositionSeeder::class
        ]);
    }
}

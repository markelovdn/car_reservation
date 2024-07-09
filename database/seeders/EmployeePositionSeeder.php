<?php

namespace Database\Seeders;

use App\Models\EmployeePosition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeePositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            ['code' => 'boss', 'title' => 'Начальник', 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'manager', 'title' => 'Менеджер', 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'driver', 'title' => 'Водитель', 'created_at' => now(), 'updated_at' => now()],
        ];

        EmployeePosition::insert($positions);
    }
}

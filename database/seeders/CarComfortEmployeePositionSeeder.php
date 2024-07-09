<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarComfortEmployeePositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['car_comfort_id' => 1, 'position_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['car_comfort_id' => 2, 'position_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['car_comfort_id' => 3, 'position_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['car_comfort_id' => 2, 'position_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('car_comfort_employee_position')->insert($data);
    }
}

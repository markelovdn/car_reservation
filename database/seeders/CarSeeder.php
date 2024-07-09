<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            ['brand' => 'Lada', 'model' => 'Vesta', 'number' => 'е412ое134RUS', 'comfort_category_id' => 3, 'driver_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['brand' => 'BMW', 'model' => 'X6', 'number' => 'е413ое134RUS', 'comfort_category_id' => 2, 'driver_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['brand' => 'Mercedes', 'model' => 'Vito', 'number' => 'е414ое134RUS', 'comfort_category_id' => 1, 'driver_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ];

        Car::insert($cars);
    }
}

<?php

namespace Database\Seeders;

use App\Models\CarComfortCategory;
use Illuminate\Database\Seeder;

class CarComfortCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['code' => 'premium', 'title' => 'Премиум', 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'business', 'title' => 'Бизнес', 'created_at' => now(), 'updated_at' => now()],
            ['code' => 'standart', 'title' => 'Стандарт', 'created_at' => now(), 'updated_at' => now()],
        ];

        CarComfortCategory::insert($data);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Driver;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $driverUsers = User::factory(3)->create();
        foreach ($driverUsers as $driverUser) {
            Driver::create([
                'user_id' => $driverUser->id,
            ]);
        }
    }
}

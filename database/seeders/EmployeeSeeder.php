<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\EmployeePosition;
use App\Models\User;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bossUser = User::factory()->create();
        $bossPosition = EmployeePosition::where('code', 'boss')->first();
        Employee::create([
            'user_id' => $bossUser->id,
            'employee_position_id' => $bossPosition->id,
        ]);

        $managerUsers = User::factory(5)->create();
        $managerPosition = EmployeePosition::where('code', 'manager')->first();
        foreach ($managerUsers as $managerUser) {
            Employee::create([
                'user_id' => $managerUser->id,
                'employee_position_id' => $managerPosition->id,
            ]);
        }
    }
}

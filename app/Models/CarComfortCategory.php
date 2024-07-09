<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarComfortCategory extends Model
{
    use HasFactory;

    public const FIRST = 'first';
    public const SECOND = 'second';
    public const THIRD = 'third';
    public const FOURTH = 'fourth';

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    public function employeePositions(): BelongsToMany
    {
        return $this->belongsToMany(EmployeePosition::class, 'car_comfort_employee_position', 'car_comfort_id', 'position_id');
    }
}

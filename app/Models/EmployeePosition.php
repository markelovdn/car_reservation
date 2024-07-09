<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EmployeePosition extends Model
{
    use HasFactory;

    public const ADMIN = 'admin';
    public const BOSS = 'boss';
    public const MANAGER = 'manager';
    public const DRIVER = 'driver';

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    public function carComfortCategories(): BelongsToMany
    {
        return $this->belongsToMany(CarComfortCategory::class, 'car_comfort_employee_position', 'position_id', 'car_comfort_id');
    }
}

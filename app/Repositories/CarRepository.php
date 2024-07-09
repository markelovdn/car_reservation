<?php

namespace App\Repositories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Collection;

class CarRepository
{
    public function getAll($carComfortIds, $filter): Collection
    {
        return Car::whereIn('comfort_category_id', $carComfortIds)
            ->filter($filter)
            ->get();
    }
}

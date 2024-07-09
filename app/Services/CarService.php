<?php

namespace App\Services;

use App\Repositories\CarRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class CarService
{
    public $carRepository;

    public function __construct(CarRepository $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    private function getAvailableCarsByPositionId($positionId): Collection
    {
        $carComfortIds = DB::table('car_comfort_employee_position')
            ->where('position_id', $positionId)
            ->pluck('car_comfort_id');

        return $carComfortIds;
    }

    public function getAvailableCars($filter): Collection
    {
        $user = app(UserRepository::class)->getOne(auth()->user()->id);
        $positionId = $user->employee->employee_position_id;

        $carComfortIds = $this->getAvailableCarsByPositionId($positionId);

        $availableCars = $this->carRepository->getAll($carComfortIds, $filter);

        return $availableCars;
    }
}

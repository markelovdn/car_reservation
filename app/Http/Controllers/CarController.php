<?php

namespace App\Http\Controllers;

use App\Filters\CarFilter;
use App\Http\Requests\CarRequest;
use App\Http\Resources\CarResource;
use App\Services\CarService;
use Illuminate\Http\Resources\Json\JsonResource;

class CarController extends Controller
{
    public function getAvailableDrivers(CarRequest $request, CarFilter $filter): JsonResource
    {
        $request->validated();
        $cars = app(CarService::class)->getAvailableCars($filter);
        return CarResource::collection($cars);
    }
}

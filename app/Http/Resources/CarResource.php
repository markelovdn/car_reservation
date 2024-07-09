<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "brand" => $this->brand,
            "model" => $this->model,
            "number" => $this->number,
            "comfort_category" => [
                "id" => $this->comfort_category_id,
                "title" => $this->comfortCategory->title
            ],
            "reservation_start" => $this->reservation_start ?? null,
            "reservation_end" => $this->reservation_end ?? null,
            "driver" => [
                "id" => $this->driver_id,
                "name" => optional($this->driver)->user->name ?? null
            ],
        ];
    }
}

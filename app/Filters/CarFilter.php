<?php

namespace App\Filters;

use Illuminate\Contracts\Database\Eloquent\Builder;

class CarFilter extends QueryFilter
{

    /**
     * Фильтр автомобилей по доступности в заданный период.
     *
     * @param string|null  $dates
     */
    public function availableForDates($dates = null): Builder
    {
        if ($dates) {
            $dates = explode(',', $dates);

            if (count($dates) === 2) {
                $startDate = $dates[0];
                $endDate = $dates[1];

                $this->builder->where(function ($query) use ($startDate, $endDate) {
                    $query->where(function ($q) use ($startDate, $endDate) {
                        $q->where('reservation_start', '>', $startDate)
                            ->orWhere('reservation_end', '<', $endDate);
                    })
                        ->orWhereNull('reservation_start')
                        ->orWhereNull('reservation_end');
                });
            }
        }

        return $this->builder;
    }

    /**
     * Фильтр автомобилей по категории комфорта.
     *
     * @param int|null $categoryId
     */
    public function byComfortCategory($categoryId = null): Builder
    {
        if (!is_null($categoryId)) {
            return $this->builder->where('comfort_category_id', $categoryId);
        }

        return $this->builder;
    }

    /**
     * Фильтр автомобилей по модели.
     *
     * @param string|null $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function byModel($model = null)
    {
        if (!is_null($model)) {
            return $this->builder->where('model', 'like', "%{$model}%");
        }

        return $this->builder;
    }
}

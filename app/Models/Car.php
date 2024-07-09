<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    public function comfortCategory(): BelongsTo
    {
        return $this->belongsTo(CarComfortCategory::class);
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter): Builder
    {
        return $filter->apply($builder);
    }
}

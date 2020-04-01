<?php

namespace App;

use App\Filters\CategoryFilters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function scopeFilter(Builder $builder, CategoryFilters $filters)
    {
        $filters->apply($builder);
    }
}

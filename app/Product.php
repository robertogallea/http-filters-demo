<?php

namespace App;

use App\Filters\ProductFilters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{

    public function scopeFilter(Builder $builder, ProductFilters $filters)
    {
        $filters->apply($builder);
    }
}

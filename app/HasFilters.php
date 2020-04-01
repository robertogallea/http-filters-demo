<?php


namespace App;


use App\Filters\AbstractFilters;
use Illuminate\Database\Eloquent\Builder;

trait HasFilters
{

    public function scopeFilter(Builder $builder, AbstractFilters $filters)
    {
        $filters->apply($builder);
    }
}

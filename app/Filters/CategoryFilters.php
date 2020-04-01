<?php


namespace App\Filters;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CategoryFilters extends AbstractFilters
{

    protected array $filters = ['search'];

    public function search(string $search)
    {
        $this->builder->where('name', 'like', "%{$search}%");
    }

}

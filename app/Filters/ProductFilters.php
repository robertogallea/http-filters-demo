<?php


namespace App\Filters;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductFilters extends AbstractFilters
{
    protected array $filters = ['search', 'sort'];


    public function search(string $search)
    {
        $this->builder->where('name', 'like', "%{$search}%");
    }

    public function sort(string $sort)
    {
        $this->builder->orderBy($sort, $this->request->dir === 'desc' ? 'desc' : 'asc');
    }

}

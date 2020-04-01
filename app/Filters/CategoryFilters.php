<?php


namespace App\Filters;


class CategoryFilters extends AbstractFilters
{

    protected array $filters = ['search'];

    public function search(string $search)
    {
        $this->builder->where('name', 'like', "%{$search}%");
    }

}

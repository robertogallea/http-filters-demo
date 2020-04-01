<?php


namespace App\Filters;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductFilters
{
    private Request $request;

    protected array $filters = ['search', 'sort'];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply(Builder $builder)
    {
        $this->builder = $builder;

        foreach ($this->getFilters() as $field => $value) {
            if (method_exists($this, $field)) {
                $this->{$field}($value);
            }
        }
    }

    public function search(string $search)
    {
        $this->builder->where('name', 'like', "%{$search}%");
    }

    public function sort(string $sort)
    {
        $this->builder->orderBy($sort, $this->request->dir === 'desc' ? 'desc' : 'asc');
    }

    private function getFilters()
    {
        return array_filter($this->request->only($this->filters));
    }
}

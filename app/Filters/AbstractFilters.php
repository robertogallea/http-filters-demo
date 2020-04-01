<?php


namespace App\Filters;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class AbstractFilters
{

    protected Request $request;

    protected array $filters = [];

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

    protected function getFilters()
    {
        return array_filter($this->request->only($this->filters));
    }
}

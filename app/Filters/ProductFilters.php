<?php


namespace App\Filters;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ProductFilters
{
    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply(Builder $builder)
    {
        $this->search($builder, $this->request->search);
        $this->sort($builder, $this->request->sort, $this->request->dir);
    }

    public function search(Builder $query, ?string $search)
    {
        $query->when($search, function ($q) use ($search) {
            $q->where('name', 'like', "%{$search}%");
        });
    }

    public function sort(Builder $query, ?string $sort, ?string $dir)
    {
        $query->when($sort, function ($q) use ($sort, $dir) {
            $q->orderBy($sort, $dir === 'desc' ? 'desc' : 'asc');
        });
    }
}

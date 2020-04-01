<?php


namespace App\Filters;


use App\Category;

class ProductFilters extends AbstractFilters
{
    protected array $filters = ['search', 'sort'];


    public function search(string $search)
    {
        $this->builder->where('name', 'like', "%{$search}%");
    }

    public function sort(string $sort)
    {
        if ($sort === 'category') {
            $this->builder->addSelect([
                'category' => Category::select('name')
                    ->whereColumn('categories.id', 'products.category_id')
                    ->take(1)
            ]);
        }
        $this->builder->orderBy($sort, $this->request->dir === 'desc' ? 'desc' : 'asc');
    }

}

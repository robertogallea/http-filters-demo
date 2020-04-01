<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopeSearch(Builder $query, ?string $search)
    {
        $query->when($search, function ($q) use ($search) {
            $q->where('name', 'like', "%{$search}%");
        });
    }

    public function scopeSort(Builder $query, ?string $sort, ?string $dir)
    {
        $query->when($sort, function ($q) use ($sort, $dir) {
            $q->orderBy($sort, $dir === 'desc' ? 'desc' : 'asc');
        });
    }
}

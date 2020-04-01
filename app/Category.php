<?php

namespace App;

use App\Filters\AbstractFilters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFilters;
}

<?php

namespace App\QueryFilters;

use Closure;

class MaxCount extends Filter
{
    public function applyFilter($builder)
    {
         return $builder->take(request($this->filterName()));
    }
}
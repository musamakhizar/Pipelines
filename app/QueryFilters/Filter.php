<?php

namespace App\QueryFilters;

use Closure;
use Illuminate\Support\Str;
abstract class Filter
{
    public function handle($request, Closure $next) //keep it consistant with laravel we use closure
    {
        //helper function to get class base name
        //dd(class_basename($this));

        if(! request()->has($this->filterName())){
            return $next($request);
        }
        $builder = $next($request);
        
        return $this->applyFilter($builder);
        
    }

    protected abstract function applyFilter($builder);

    protected function filterName()
    {
        return Str::snake(class_basename($this));
    }
}
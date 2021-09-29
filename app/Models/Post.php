<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

use App\QueryFilters\Active;
use App\QueryFilters\MaxCount;
use App\QueryFilters\Sort;

class Post extends Model
{
    use HasFactory;

    public static function allPosts()
    {
       return $posts = app(Pipeline::class)
        ->send(Post::query())
        ->through([
          Active::class,
          Sort::class,
          MaxCount::class,
        ])
        ->thenReturn()
        ->paginate(5);//for pagination
        //->get();
    }
}

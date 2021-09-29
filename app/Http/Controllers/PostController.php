<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //$posts = ""; //query() it will return a query builder for us so we can continue to chain things to it 
        
        $posts = Post::allPosts();

        
        
        // if(request()->has('active')){
        //     $posts->where('active', request('active'));
        // }
        //Order direction must be "asc" or "desc"
        // if(request()->has('sort')){
        //     $posts->orderBy('title', request('sort'));
        // }
        return view('post.index',compact('posts'));
    }
}

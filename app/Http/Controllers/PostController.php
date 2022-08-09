<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;

use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index()
    {
        if (Cache::has('posts')) {
            $posts = Cache::get('posts');
        } else {
          $posts = Post::where('status', 2)->latest('id')->paginate(20);
          Cache::put('posts', $posts); 
        }
        
        

        return view('posts.index', compact('posts'));
    }

    //posts relacionados o similares
    public function show(Post $post)
    {
        $similares = Post::where('category_id', $post->category_id)->where('status', 2)
            ->where('id', '!=', $post->id)
            ->latest('id')
            ->take(4)
            ->get();

        return view('posts.show', compact('post', 'similares'));
    }

    public function category(Category $category)
    {
        $posts = Post::where('category_id', $category->id)
            ->where('status', 2)
            ->latest('id')
            ->paginate(6);

        return view('posts.category', compact('posts', 'category'));
    }
}

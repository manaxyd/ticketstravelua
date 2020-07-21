<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class TagController extends Controller
{
    public function tagsearch($tag)
    {
        $publics = Post::latest()
            ->where('body', 'like', '%'.$tag.'%')
            ->orWhere('meta_keywords', 'like', '%'.$tag.'%')
            ->paginate(18);
        $cat_name = 'Результат поиска по тегу - '.$tag;
        $cats = Post::select('category_id')->groupBy('category_id')->get();
        $meta_robots = 'index, nofollow';
        $cat_slug = '';
        return view('blade.public')->with([
            'publics' => $publics,
            'cat_name' => $cat_name,
            'cats' => $cats,
            'meta_robots' => $meta_robots,
            'tag' => $tag,
            'cat_slug' => $cat_slug
        ]);
    }
}

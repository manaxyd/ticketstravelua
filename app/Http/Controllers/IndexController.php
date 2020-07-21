<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\SpoHotel;
class IndexController extends Controller
{
    public function index()
    {
		$posts = Post::latest()->where([
            ['featured', '!=', '1']
        ])->orderBy('created_at', 'desc')->take(6)->get();

		$lastpost = Post::latest()
            ->where([
		['featured', '=', '1']
		])->first();
		
        return view('welcome')->with([
            'posts' => $posts,
            'lastpost' => $lastpost
        ]);
    }

    public function showPost($slug){
        $post = Post::select(['id', 'author_id', 'title', 'excerpt', 'body', 'image', 'slug', 'created_at', 'updated_at', 'category_id', 'seo_title', 'meta_description', 'meta_keywords'])
            ->where('slug', '=', $slug)
            ->firstOrFail($slug);
        $posts = Post::latest()->paginate(8);
        $keywords = $post->meta_keywords;
        $tags = explode(", ", $keywords);
        //var_dump($tags);
        $previous = Post::where('id', '<', $post->id)->orderBy('id','desc')->first();
        $next = Post::where('id', '>', $post->id)->orderBy('id')->first();

        return view('/blade.post')->with([
            'post' => $post,
            'posts' => $posts,
            'tags' => $tags,
            'previous' => $previous,
            'next' => $next
        ]);
    }
	
	public function showSpoHotel($slug){
        $spohotel = SpoHotel::select(['id', 'author_id', 'title', 'body', 'image', 'slug', 'created_at', 'updated_at', 'seo_title', 'meta_description', 'meta_keywords'])
            ->where('slug', '=', $slug)
            ->firstOrFail($slug);
		$spohotels = Post::latest()->paginate(8);
        $previous = SpoHotel::where('id', '<', $spohotel->id)->orderBy('id','desc')->first();
        $next = SpoHotel::where('id', '>', $spohotel->id)->orderBy('id')->first();

        return view('/blade.spo-details')->with([
            'spohotel' => $spohotel,
            'spohotels' => $spohotels,
            'previous' => $previous,
            'next' => $next
        ]);
    }

    public function searchresult(Request $request){
        $s = $request->input('forsearch');
        $cat_name  = 'результат поиска';
        $cats = Post::select('category_id')->groupBy('category_id')->get();
        $meta_robots = 'noindex, nofollow';
        $cat_slug = '';
        $publics = Post::latest()
            ->search($s)
            ->paginate(10);

        return view('/blade.public')->with([
            'publics' => $publics,
            's' => $s,
            'cat_name' => $cat_name,
            'cats' => $cats,
            'meta_robots' => $meta_robots,
            'cat_slug' => $cat_slug
        ]);
    }
	
	public function showCategory(){
		$filterposts = Post::select(['id', 'author_id', 'title', 'excerpt', 'body', 'image', 'slug', 'created_at'])->orderBy('created_at', 'desc')->take(6)->get();
        $posts = Post::latest()->where('category_id', '=', '1')->paginate(10);
        return view('/blade.category')->with(['filterposts' => $filterposts, 'posts' => $posts]);
    }
	
	public function aviabilety(){
        //$posts = Post::latest()->where('category_id', '=', '1')->paginate(10);
        $posts = Post::latest()->where('category_id', '=', '1')->orderBy('created_at', 'desc')->take(6)->get();
        return view('/blade.aviabilety')->with(['posts' => $posts]);
    }
	
	public function hotels(){
	    $public_name = 'Публикации';
        $posts = Post::latest()->whereIn('category_id', [13, 2])->orderBy('created_at', 'desc')->take(6)->get();
        $otherposts = Post::latest()->where('category_id', '=', '1')->orderBy('created_at', 'desc')->take(6)->get();
        $spohotels = SpoHotel::latest()->where('status', '=', 'published')->orderBy('created_at', 'desc')->take(6)->get();
        return view('/blade.hotels')->with(['posts' => $posts, 'public_name' => $public_name, 'otherposts' => $otherposts, 'spohotels' => $spohotels]);
    }
	
	public function promo(){
		//$public_name = 'Публикации';
	    $spohotels = SpoHotel::latest()->where('status', '=', 'published')->orderBy('created_at', 'desc')->take(6)->get();
		$otherposts = Post::latest()->orderBy('created_at', 'desc')->take(6)->get();
        return view('/blade.promo')->with(['spohotels' => $spohotels, 'otherposts' => $otherposts]);
    }

}

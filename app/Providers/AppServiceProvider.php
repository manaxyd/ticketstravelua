<?php

namespace App\Providers;

use Jenssegers\Date\Date;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use View;
use Auth;
use App\Post;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		/*
		 * Убираем дубли страниц, сервер выдаст ошибку 404 или Not Found или Перенаправит
		 * Проверка URL на содержание /public/ или /public/index.php
		 */
		if (preg_match("/^\/(public)|(public\/index.php)/",\Request::getBaseUrl()) ) {
    
			$newUrl = str_replace(\Request::getBaseUrl(), '', \Request::getUri());
			header('Location: '.$newUrl, true, 301);
			exit();

		}
	
        Date::setlocale(config('app.locale'));

        Schema::defaultStringLength(191);
		View::composer('*', function($view){
			$view->with('auth', Auth::user());
		});
		
		View::composer('/include.header', function($postinmenu){

		    $menuposts = Post::select(['id', 'author_id', 'title', 'excerpt', 'body', 'image', 'slug', 'created_at', 'category_id'])
                ->orderBy('created_at', 'desc')
                ->limit(5)
                ->get();
            $publics = Post::latest()->paginate(18);
            $cats = Post::select('category_id')->groupBy('category_id')->get();
            $cat_name = "Публикации";
            $meta_robots = 'all';
            $tag = '';
            $cat_slug = '';

			$postinmenu->with([
			    'menuposts' => $menuposts,
                'publics' => $publics,
                'cat_name' => $cat_name,
                'cats' => $cats,
                'meta_robots' => $meta_robots,
                'tag' => $tag,
                'cat_slug' => $cat_slug
            ]);
		});
		
		
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
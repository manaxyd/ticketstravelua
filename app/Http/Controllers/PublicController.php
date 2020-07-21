<?php

namespace App\Http\Controllers;

//use Carbon\Carbon;
//use Illuminate\Http\Request;
use App\Post;
use App\User;
//use Jenssegers\Date\Date;

class PublicController extends Controller
{
    public function all()
    {

        $publics = Post::latest()->paginate(18);
        $cats = Post::select('category_id')->groupBy('category_id')->get();
        $cat_name = "Публикации";
        $meta_robots = 'all';
        $tag = '';
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

    public function catsort($category)
    {
        $cat_name = '';
        $cat_slug = '';
        switch ($category) {
            case "aviabilety":
                $cat = 1;
                $cat_name = "Авиабилеты";
                $cat_slug = "aviabilety";
                break;

            case "idei_puteshestviy":
                $cat = 2;
                $cat_name = "Идеи путешествий";
                $cat_slug = "idei_puteshestviy";
                break;

            case "avtobusy":
                $cat = 3;
                $cat_name = "Автобусы";
                $cat_slug = "avtobusy";
                break;

            case "poezda":
                $cat = 4;
                $cat_name = "Поезда";
                $cat_slug = "poezda";
                break;

            case "poleznoe":
                $cat = 5;
                $cat_name = "Полезное";
                $cat_slug = "poleznoe";
                break;

            case "konkursy":
                $cat = 6;
                $cat_name = "Конкурсы";
                $cat_slug = "konkursy";
                break;

            case "sobytiya":
                $cat = 7;
                $cat_name = "События";
                $cat_slug = "sobytiya";
                break;

            case "koncerty":
                $cat = 8;
                $cat_name = "Концерт";
                $cat_slug = "koncerty";
                break;

            case "vystavki":
                $cat = 9;
                $cat_name = "Выставки";
                $cat_slug = "vystavki";
                break;

            case "arenda-avto":
                $cat = 10;
                $cat_name = "Авто";
                $cat_slug = "avto";
                break;

            case "restorany":
                $cat = 11;
                $cat_name = "Рестораны";
                $cat_slug = "restorany";
                break;

            case "shou":
                $cat = 12;
                $cat_name = "Шоу";
                $cat_slug = "shou";
                break;

            case "oteli":
                $cat = 13;
                $cat_name = "Отели";
                $cat_slug = "oteli";
                break;

            case "sport":
                $cat = 14;
                $cat_name = "Спорт";
                $cat_slug = "sport";
                break;

            case "akcii":
                $cat = 15;
                $cat_name = "Акции";
                $cat_slug = "akcii";
                break;

            default:
                $cat = '';
                $cat_slug = '';
        }
        $publics = Post::latest()->where('category_id', '=', $cat)->paginate(18);
        $cats = Post::select('category_id')->groupBy('category_id')->get();
        $meta_robots = 'index, nofollow';
        $tag = '';
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

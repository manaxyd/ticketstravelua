<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::post('send-mail', 'MailSetting@send_form');

Route::get('newsletter','NewsletterController@create');
Route::post('newsletter','NewsletterController@store');
Route::post('/media','IndexController@searchresult');

Route::get('/', 'IndexController@index')->name('index');
Route::get('category', 'IndexController@showCategory');
Route::get('category/aviabilety', 'IndexController@aviabilety');
Route::get('/aviabilety', 'IndexController@aviabilety');
Route::get('/hotels', 'IndexController@hotels');
Route::get('/promo', 'IndexController@promo');
Route::get('/media', 'PublicController@all');
Route::get('/media/{category}', 'PublicController@catsort');
Route::get('/tag/{tag}', 'TagController@tagsearch');


Route::get('/post/{slug}/', 'IndexController@showPost')->name('postShow');
//Route::get('/spohotel/{slug}/', 'IndexController@showSpoHotel')->name('spoHotelShow');
Route::get('/promo/{slug}/', 'IndexController@showSpoHotel')->name('spoHotelShow');

Route::get('sitemap', 'SitemapController@index');

Route::group(['prefix' => 'admin'], function (){
    Voyager::routes();
});

Route::group(['middleware' => 'guest'], function (){
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@register');
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/logout', function (){
        \Auth::logout();
        return redirect(route('index'));
    })->name('logout');
    Route::get('/my/account', 'AccountController@index')->name('account');

});

Route::get('/visitor','VisitorController@index');
Route::get('/visitor/login',['as' => 'visitor.login','uses' => 'ControllersVisitorLoginController@showLoginForm']);
Route::post('/visitor/login',['uses' => 'ControllersVisitorLoginController@login']);
Route::get('/visitor/logout',['as' => 'visitor.logout','uses' => 'ControllersVisitorLoginController@logout']);
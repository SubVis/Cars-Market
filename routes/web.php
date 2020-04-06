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

Route::name('home')->get('/', function () {
    return view('market/home');
});
Route::get('home', function () {
    return view('market/home');
});
Route::name('userProfile')->get('/userProfile', 'Market\UserController@index');
Route::name('product')->get('/product', function () {
    return view('market/product');
});


Route::name('buy')->get('buy', 'Market\BuyController@index');
Route::name('car/show')->get('car/show/{id}', 'Market\BuyController@show');

// cars 
Route::name('sell')->get('sell', 'Market\CarController@create');
Route::name('storeCars')->post('storeCars', 'Market\CarController@store');
//Route::name('sell2')->get('sell2', function(){return view('market/sell2');});
Route::name('storeCars2')->post('storeCars2', 'Market\CarController@store2');
Route::name('search')->post('search', 'Market\SearchController@index');


Route::name('ajax_model')->post('ajax_model', 'Market\SearchController@model_ajax');

// brands
Route::name('brand')->get('brand{id}', 'Market\BrandController@show');

Route::name('all-brands')->get('all-brands','Market\BrandController@index');


Route::name('login')->get('login', function () {
    return view('market/login');
});
Route::name('login')->post('login', 'Auth\LoginController@login');
Route::name('logout')->post('logout', 'Auth\LoginController@logout');

Route::name('sign-up')->get('sign-up', function () {
    return view('market/signup');
});

Route::name('register')->post('register', 'Auth\RegisterController@register');

Route::name('search')->get('search', function () {
    return view('market/Search');
});

Route::name('showrooms')->get('showrooms', function () {
    return view('market/showrooms');
});



Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
});

Route::group(["middleware"=>"auth"], function (){

Route::name('sell')->get('sell', 'Market\CarController@create');
Route::name('storeCars')->post('storeCars', 'Market\CarController@store');

});
/*
    Route::name('sell2')->get('sell2', function () {
        return view('market/sell2');
    });


    Route::name('blog')->get('blog', function () {
        return view('market/blog');
    });

    Route::name('search')->get('search', function () {
        return view('market/search');
    });


    Route::get('/home', 'HomeController@index')->name('home');
*/


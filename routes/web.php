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

Route::get('/', function () {
    return view('market/market/home');
});





Route::name('home')->get('/', function () {
    return view('market/market/home');
});


Route::name('buy')->get('buy', 'Market\BuyController@index');


// cars 
 Route::name('sell')->get('sell', 'Market\CarController@create');
 Route::name('storeCars')->post('storeCars', 'Market\CarController@store');

 Route::name('sell2')->get('sell2', function(){return view('market/market/sell2');});
 Route::name('store_photo_Cars')->post('store_photo_Cars', 'Market\CarController@store2');
 



 Route::name('login')->get('login', function(){return view('market/market/login');});
 Route::name('sign-up')->get('sign-up', function(){return view('market/market/signup');});
/*
 Route::name('sell2')->get('sell2', function () {
    return view('market/market/sell2');
});
*/
 Route::name('how-use')->get('how-use', function () {
    return view('market/market/how-use');
});

  Route::name('blog')->get('blog', function () {
    return view('market/market/blog');
});

    Route::name('blogs')->get('blogs', function () {
    return view('market/market/blog');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

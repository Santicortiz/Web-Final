<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login', function () {
    return "Esto es una vista para que se muestra la maldita vaina esa";
});
//Route::get('/Trailers','TrailersController@index');
//Route::get('/Trailers/create','TrailersController@create');

Route::resource('Trailers', 'TrailersController');
/*Route::get('Trailers/login', function () {
    return view('login');
});*/

Route::get('login','TrailersController@login');
Route::get('/Trailers/create','TrailersController@crear');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('start', 'TrailersController@start')->name('start');
Route::get('logout','TrailersController@logout')->name('logout');

Route::get('/Public','TrailersController@start');

Route::get('/Trailers/users', 'TrailersController@usuarios');
Route::get('/Trailers/users', function () {
    return view('users');
});

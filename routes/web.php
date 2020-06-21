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

/*Routes normales du site*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});



/*Interface administrateur*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*Authentification*/

Auth::routes();

/*Gestion publications - frontend*/

Route::get('/home', 'PostController@index')->name('home');
Route::get('/post/{slug}', 'PostController@show');

/*Requetes de demande de service*/

Route::resource('request', 'DemandeController');

/*Route::view('/about', 'about');*/


/*Route::get('/', function () {
    return view('welcome');
});*/
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inicio','IndexController@index');
Route::get('/contacto','IndexController@contacto')->name('contacto');

Route::get('/dashboard','IndexController@dashboard')->name('dashboard');

Route::get('/anuncios','AnunciosController@index')->name('anuncios');
Route::post('/anuncios/store','AnunciosController@store')->name('GuardarAnuncio');

Route::post('/deleteAnuncio','AnunciosController@delete')->name('deleteAnuncio');




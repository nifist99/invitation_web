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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontController@index');

Route::get('daftar', 'FrontController@daftar');

Route::get('wedding/{url_web}', 'FrontController@tema');

Route::post('komentar/pesan', 'FrontController@store');

Route::post('register', 'FrontController@register');

Route::post('suscribe', 'FrontController@suscribe');
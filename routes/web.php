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

Route::get('/','App\Http\Controllers\Controller@index')->name('/');
Route::get('/about','App\Http\Controllers\Controller@about')->name('about');
Route::get('/services','App\Http\Controllers\Controller@services')->name('services');
Route::get('/contact','App\Http\Controllers\Controller@contact')->name('contact');
Route::get('/valuingcreations','App\Http\Controllers\Controller@valuingcreations')->name('valuingcreations');
Route::get('/servicedetail/{id}','App\Http\Controllers\Controller@servicedetail')->name('servicedetail');
Route::get('/saftycultures','App\Http\Controllers\Controller@saftycultures')->name('saftycultures');
Route::get('/conductinters','App\Http\Controllers\Controller@conductinters')->name('conductinters');
Route::get('/policies','App\Http\Controllers\Controller@policies')->name('policies');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

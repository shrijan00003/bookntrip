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

Route::get('/','pagescontroller@index');
Route::get('/about','pagescontroller@about');
Route::get('/services','pagescontroller@services');

Route::resource('posts','postscontroller');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

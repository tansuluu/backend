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
    return view('welcome');
});

Auth::routes();

Route::get('/home',function () {
    return view('home');
});


Route::resource('user', 'HomeController');
Route::resource('post', 'IndexController');


Route::get('addPost','IndexController@add')->name('addPost');

Route::post('addPost','IndexController@save')->name('savePost');

Route::get('posts','IndexController@index');

Route::post('editPost/{id}','IndexController@update')->name('updatePost');
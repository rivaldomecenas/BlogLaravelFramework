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

Route::get('pages/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name.' with and id of ' .$id;
});

Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/pages', 'PagesController@index');
Route::get('pages/about', 'PagesController@about');
Route::get('pages/services', 'PagesController@services');

Route::resource('posts','PostsController');
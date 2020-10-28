<?php

/*
|--------------------------------------------------------
| Web Routes
|--------------------------------------------------------
|
| Here is where you can register web routes for your application. These routes are located by the RouteServiceProvider within a group which contains the "web" middleware group. Now create something great!
|
|
|
*/

Route::get('/', 'PostsController@index')->name('top');

Route::resource('posts', 'PostsController', ['only' =>['create', 'store', 'show', 'edit', 'update', 'destroy']]);
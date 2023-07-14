<?php

use Illuminate\Support\Facades\Route;

Route::get('/blog', 'App\Http\Controllers\PagesController@blog');
Route::get('/create_blog', 'App\Http\Controllers\PostsController@create');
Route::post('/store_blog', 'App\Http\Controllers\PostsController@store');
Route::get('/blog_show/{id}', 'App\Http\Controllers\PostsController@show');
Route::delete('/blog_delete/{id}','App\Http\Controllers\PostsController@delete');

Route::post('/comment', 'App\Http\Controllers\CommentController@store');

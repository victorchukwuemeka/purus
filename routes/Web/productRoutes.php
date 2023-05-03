<?php

use Illuminate\Support\Facades\Route;




Route::get('products','App\Http\Controllers\ProductsController@index');
Route::get('/create_products','App\Http\Controllers\ProductsController@create');
Route::post('/store_products','App\Http\Controllers\ProductsController@store_products');
Route::get('/farmers_id', 'App\Http\Controllers\ProductsController@farmers_id');



//Route::get('/farmers', 'App\Http\Controllers\Farmers\FarmersController@index')
//     ->name('farmer.index');
//Route::post('/store_farm', 'App\Http\Controllers\Farmers\FarmersController@store_farm')
//     ->name('home.create_a_farm');

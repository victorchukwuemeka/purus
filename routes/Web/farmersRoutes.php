<?php

use Illuminate\Support\Facades\Route;

// farm routes

Route::get('/farms','App\Http\Controllers\Farms\FarmsController@index');
     //->name('farmer.index');
Route::post('/store_farm', 'App\Http\Controllers\Farms\FarmsController@store_farm')
          ->name('home.create_a_farm');

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Spatie\Sitemap\SitemapGenerator;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 //include('\Web\farmersRoutes.php');



Route::get('/rr', 'App\Http\Controllers\Farms\FarmsController@index');
Auth::routes();

Rooute::get('/', function()
{
   echo ="victo";
});
Route::get('/llll', [App\Http\Controllers\PagesController::class, 'index'])->name('home');
Route::get('/create_a_farm', [App\Http\Controllers\PagesController::class, 'create_a_farm'])
->name('create_a_farm');

Route::get('generate-sitemap', function () {
    SitemapGenerator::create('https://purus.ng')
        ->writeToFile(public_path('sitemap.xml'));
});

 //Route::get('/tt', )

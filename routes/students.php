<?php


Route::prefix('students')->group(function(){
  Route::get('/', function () {
      dd('Welcome to student routes.');
  });

});

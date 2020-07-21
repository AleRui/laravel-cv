<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('check-db', function () {
    if(DB::connection()->getPdo()) {
        echo "Successfully connected to the database => "
          . DB::connection()->getDatabaseName();
  }
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

/* WorkExperiences */
Route::get('/we/{id?}', 'WorkExperienceController@show')->name('we.show');

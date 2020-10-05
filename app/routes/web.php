<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('check-db', function () {
    try {
        DB::connection()->getPdo();
        echo DB::connection()->getDatabaseName();
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

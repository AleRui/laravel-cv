<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Passport | Personal Access Tokens
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::get('signup/activate/{token}', 'AuthController@signupActivate');

    // Acceden a través del Middleware
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

// Route::group(['middleware' => 'auth:api'], function () {
//     // Presentation Letters
//     Route::get('/letters/{id?}', 'PresentationLetterController@show')->name('letters.show');
//     // Studies
//     Route::get('/studies/{id?}', 'StudyController@show')->name('studie.show');
//     // Work Experience
//     Route::get('/we/{id?}', 'WorkExperienceController@show')->name('we.show');
// });

// -----------------------------------------------------------------------------

// Passport:client | Client Credentials Grant Tokens
Route::group(['middleware' => 'client'], function () {
    // User with info
    Route::get('/usercv/{id?}', 'UserController@show')->name('usercv.show');
    // Presentation Letters
    //Route::get('/letters/{id?}', 'PresentationLetterController@show')->name('letters.show');
    // Studies
    //Route::get('/studies/{id?}', 'StudyController@show')->name('studie.show');
    // Work Experience
    //Route::get('/we/{id?}', 'WorkExperienceController@show')->name('we.show');
});

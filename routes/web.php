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
*/


Route::prefix('/api')->group(function() {

    Auth::routes(['verify' => true]);

    Route::get('users', 'UsersController@index')->middleware('cors');

    Route::prefix('/tips-and-tricks')->group(function() {
        Route::get('/', 'TipsAndTricksController@index')->middleware('cors');
        Route::get('/create', 'TipsAndTricksController@create')->middleware('cors');
        Route::post('/', 'TipsAndTricksController@store')->middleware('cors');
        Route::get('/{id}', 'TipsAndTricksController@show')->middleware('cors');
        Route::get('/{tipAndTrick}/edit', 'TipsAndTricksController@edit')->middleware('cors');
        Route::patch('/{tipAndTrick}',  'TipsAndTricksController@update')->middleware('cors');
        Route::delete('/{tipAndTrick}', 'TipsAndTricksController@destroy')->middleware('cors');
    });

    Route::prefix('/ideas')->group(function() {
        Route::get('/', 'IdeasController@index')->middleware('cors');
        Route::get('/create', 'IdeasController@create')->middleware('cors');
        Route::post('/', 'IdeasController@store')->middleware('cors');
        Route::get('/{id}', 'IdeasController@show')->middleware('cors');
        Route::get('/{idea}/edit', 'IdeasController@edit')->middleware('cors');
        Route::patch('/{idea}',  'IdeasController@update')->middleware('cors');
        Route::delete('/{idea}', 'IdeasController@destroy')->middleware('cors');
    });

    Route::prefix('/{username}')->group(function() {
        Route::get('/', 'ProfileController@index')->middleware('cors');
        Route::get('/edit', 'ProfileController@edit')->middleware('cors');
        Route::patch('/', 'ProfileController@update')->middleware('cors');
    });
});
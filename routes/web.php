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
        Route::get('/create', 'TipsAndTricksController@create')->middleware('auth');
        Route::post('/', 'TipsAndTricksController@store');
        Route::get('/{tipAndTrick}', 'TipsAndTricksController@show');
        Route::get('/{tipAndTrick}/edit', 'TipsAndTricksController@edit');
        Route::patch('/{tipAndTrick}',  'TipsAndTricksController@update');
        Route::delete('/{tipAndTrick}', 'TipsAndTricksController@destroy');
    });

    Route::prefix('/ideas')->group(function() {
        Route::get('/', 'IdeasController@index')->middleware('cors');
        Route::get('/create', 'IdeasController@create')->middleware('auth');
        Route::post('/', 'IdeasController@store');
        Route::get('/{idea}', 'IdeasController@show');
        Route::get('/{idea}/edit', 'IdeasController@edit');
        Route::patch('/{idea}',  'IdeasController@update');
        Route::delete('/{idea}', 'IdeasController@destroy');
    });

    Route::prefix('/{username}')->group(function() {
        Route::get('/', 'ProfileController@index')->middleware('cors');
        Route::get('/edit', 'ProfileController@edit');
        Route::patch('/', 'ProfileController@update');
    });
});
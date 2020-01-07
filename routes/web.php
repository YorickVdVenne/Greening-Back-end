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
        Route::get('/create', 'TipsAndTricksController@create')->middleware('cors', 'auth');
        Route::post('/', 'TipsAndTricksController@store')->middleware('cors', 'auth');
        Route::get('/{tipAndTrick}', 'TipsAndTricksController@show')->middleware('cors', 'auth');
        Route::get('/{tipAndTrick}/edit', 'TipsAndTricksController@edit')->middleware('cors', 'auth');
        Route::patch('/{tipAndTrick}',  'TipsAndTricksController@update')->middleware('cors', 'auth');
        Route::delete('/{tipAndTrick}', 'TipsAndTricksController@destroy')->middleware('cors', 'auth');
    });

    Route::prefix('/ideas')->group(function() {
        Route::get('/', 'IdeasController@index')->middleware('cors');
        Route::get('/create', 'IdeasController@create')->middleware('cors', 'auth');
        Route::post('/', 'IdeasController@store')->middleware('cors', 'auth');
        Route::get('/{idea}', 'IdeasController@show')->middleware('cors', 'auth');
        Route::get('/{idea}/edit', 'IdeasController@edit')->middleware('cors', 'auth');
        Route::patch('/{idea}',  'IdeasController@update')->middleware('cors', 'auth');
        Route::delete('/{idea}', 'IdeasController@destroy')->middleware('cors', 'auth');
    });

    Route::prefix('/{username}')->group(function() {
        Route::get('/', 'ProfileController@index')->middleware('cors');
        Route::get('/edit', 'ProfileController@edit')->middleware('cors');
        Route::patch('/', 'ProfileController@update')->middleware('cors');
    });
});
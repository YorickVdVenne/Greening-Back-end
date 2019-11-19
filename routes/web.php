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

Route::get('/', 'HomeController@index');

Route::get('/about', 'AboutController@index');

Route::prefix('/profile')->group(function() {
    Route::get('/', 'ProfileController@index')->name('profile.show');
    Route::get('/edit', 'ProfileController@edit');
    Route::patch('/', 'ProfileController@update');
});

Route::prefix('/tips-and-tricks')->group(function() {
    Route::get('/', 'TipsAndTricksController@index');
    Route::get('/create', 'TipsAndTricksController@create');
    Route::post('/', 'TipsAndTricksController@store');
    Route::get('/{tip}', 'TipsAndTricksController@show');
    Route::get('/{tip}/edit', 'TipsAndTricksController@edit');
    Route::patch('/{tip}',  'TipsAndTricksController@update');
    Route::delete('/{tip}', 'TipsAndTricksController@destroy');
});

Route::prefix('/brainstorm')->group(function() {
    Route::get('/', 'BrainstormController@index');
});

Route::prefix('/ideas')->group(function() {
    Route::get('/', 'IdeasController@index');
    Route::get('/create', 'IdeasController@create');
    Route::post('/', 'IdeasController@store');
    Route::get('/{idea}', 'IdeasController@show');
    Route::get('/{idea}/edit', 'IdeasController@edit');
    Route::patch('/{idea}',  'IdeasController@update');
    Route::delete('/{idea}', 'IdeasController@destroy');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

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

Auth::routes(['verify' => true]);

Route::get('/api', 'ApiController@index')->name('api');

    Route::get('/api/users', 'ProfileController@getAll')->name('api-users'); 
    // Route::get('/api/users/{user_id}', 'ProfileController@getOne')->name('api-user'); 


Route::get('/about', 'AboutController@index');

Route::get('/404', 'NotFoundController@index');

Route::prefix('/tips-and-tricks')->group(function() {
    Route::get('/', 'TipsAndTricksController@index');
    Route::get('/create', 'TipsAndTricksController@create')->middleware('auth');
    Route::post('/', 'TipsAndTricksController@store');
    Route::get('/{tipAndTrick}', 'TipsAndTricksController@show');
    Route::get('/{tipAndTrick}/edit', 'TipsAndTricksController@edit');
    Route::patch('/{tipAndTrick}',  'TipsAndTricksController@update');
    Route::delete('/{tipAndTrick}', 'TipsAndTricksController@destroy');
});

Route::prefix('/brainstorm')->group(function() {
    Route::get('/', 'BrainstormController@index');
});
    
Route::prefix('/ideas')->group(function() {
    Route::get('/', 'IdeasController@index');
    Route::get('/create', 'IdeasController@create')->middleware('auth');
    Route::post('/', 'IdeasController@store');
    Route::get('/{idea}', 'IdeasController@show');
    Route::get('/{idea}/edit', 'IdeasController@edit');
    Route::patch('/{idea}',  'IdeasController@update');
    Route::delete('/{idea}', 'IdeasController@destroy');
});

Route::prefix('/{username}')->group(function() {
    Route::get('/', 'ProfileController@index');
    Route::get('/edit', 'ProfileController@edit');
    Route::patch('/', 'ProfileController@update');
});



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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('plants', 'PlantsController');

// Route::get('/plants', 'PlantsController@index');
// Route::get('/plants/create', 'PlantsController@create');
// Route::get('/plants/{plant}', 'PlantsController@show'); 
// Route::post('/plants', 'PlantsController@store');
// Route::get('/plants/{plant}/edit', 'PlantsController@edit');
// Route::patch('/plants/{plant}', 'PlantsController@update'); 
// Route::delete('/plants/{plant}', 'PlantsController@destroy'); 



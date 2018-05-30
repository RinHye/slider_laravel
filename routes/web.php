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



Route::middleware('auth')->group(function(){

    Route::get('/slider', function () {
        return view('slider');
    });
    Route::post('/slider/add/{id}', 'SliderController@add');

    Route::post('/slider/modify/{id}', 'SliderController@modify');

    Route::post('/slider/delete/{id}', 'SliderController@delete');
});



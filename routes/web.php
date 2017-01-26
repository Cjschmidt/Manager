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



//login handling
Route::get('/', 'Auth\LoginController@getLogin');
Route::post('/login', 'Auth\LoginController@postLogin');


//Authenticated
Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', function(){
        var_dump('success');
    });

});

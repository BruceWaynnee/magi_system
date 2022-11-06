<?php

use Illuminate\Support\Facades\Route;

/*
| #####################
|    Authentication
| #####################
|
| Here is where you register all magi1 dashboard authentication routers.
|
*/

Route::group([
    'namespace' => 'Magi1',
], function(){
    Route::get('magi1/login', 'Magi1Controller@magi1Login')->name('magi1-login-form')->middleware('guest');

    Route::post('magi1/login', 'Magi1Controller@login')->name('magi1-login')->middleware('guest');
});

/*
|--------------------------------------------------------------------------
| Magi 1 Routes
|--------------------------------------------------------------------------
|
| Here is where you can register magi 1 routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "magi 1" middleware group. Now create something great!
|
*/

Route::group([
    'namespace'  => 'Magi1',
    'prefix'     => '/magi1',
    'middleware' => 'magi_1_auth',
], function(){
    // Main Magi 1 Routers
    Route::group([
        'prefix' => '/',
    ], function(){
        Route::get('/', 'Magi1Controller@index')->name('magi1-home');

    });
});

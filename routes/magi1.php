<?php

use Illuminate\Support\Facades\Route;

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
    'namespace' => 'Magi1',
    'prefix'    => '/magi1',
], function(){
    // Main Magi 1 Routers
    Route::group([
        'prefix' => '/',
    ], function(){
        Route::get('/', 'Magi1Controller@index')->name('magi1-home');

    });
});

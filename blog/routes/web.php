<?php

use Illuminate\Support\Facades\Route;

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

//Routes created to understand static dynamic website behaviour
Route::get('statichelloworld', 'HelloWorldController@staticIndex');
Route::get('dynamichelloworld', 'HelloWorldController@dynamicIndex');
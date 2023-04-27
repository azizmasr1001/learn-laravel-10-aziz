<?php

use Illuminate\Support\Facades\Route;



/* U can use this code

Route::get('/', function () {
    return view('home');
});

 Or This
*/

Route::view('/', 'welcome');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
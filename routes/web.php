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
    $data = ['comic' => config('comics'), 'nomePagina' => 'DC Comics'];
    return view('guest.home', $data);
})->name('home');


Route::get('/comic', function() {
    $data = ['nomePagina' => 'DC Comics'];
    return view('guest.comic', $data);
})->name('comic');
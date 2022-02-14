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


Route::get('shop/{id}', function($id) {
    $collection = collect(config('comics'));
    $comic = $collection->where('id', $id);
    if ($comic->count() === 0) {
    }
    $singleComic = '';
    foreach ($comic as $value) {
        $singleComic = $value;
    }
    return view('guest.comic', [
        'comic' => $singleComic,
        'nomePagina' => $singleComic['series']
    ]);
})->name('shop');
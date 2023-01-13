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

    $comic = config('comic');

    // dd($pasta);

    return view('welcome', compact('comic'));
})->name('home');

Route::get('/comics/{key}', function ($key) {

    $comic = config('comic');

    if (is_numeric($key) && $key >= 0 && $key < count($comic)) {
        $prodotto_singolo = $comic[$key];
    } else {
        abort(404);
    }

    // dd($prodotto_singolo);

    return view('comics', compact('prodotto_singolo'));
})->name('show.comic');



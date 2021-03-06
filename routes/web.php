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
    return view('guest.home');
});


Route::get('/tv', function () {
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('guest.tv', $data);
});

Route::get('/comics', function () {
    $comics = config('comics');
    $data = [
        'comics' => $comics
    ];
    return view('guest.comics', $data);
});

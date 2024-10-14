<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/tari-lahbako', function () {
    return view('pages.detail-tari.lahbako');
});
Route::get('/tari-pandhalungan', function () {
    return view('pages.detail-tari.pandhalungan');
});
Route::get('/tari-padumbe', function () {
    return view('pages.detail-tari.padumbe');
});
Route::get('/tari-mojosari', function () {
    return view('pages.detail-tari.mojosari');
});
Route::get('/tari-macan-kadduk', function () {
    return view('pages.detail-tari.macan-kaduk');
});
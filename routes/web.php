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
    return view('pages.home');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('pages.tentang-kami');
})->name('tentang-kami');

Route::get('/produk', function () {
    return view('pages.produk');
})->name('produk');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/kontak-kami', function () {
    return view('pages.kontak-kami');
})->name('kontak-kami');

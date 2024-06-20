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

Route::prefix('tentang-kami')->name('tentang-kami.')->group(function () {
    Route::get('visi-misi', function () {
        return view('pages.tentang-kami.visi-misi');
    })->name('visi-misi');
});

Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('konsultasi-it', function () {
        return view('pages.layanan.konsultasi-it');
    })->name('konsultasi-it');

    Route::get('integrasi-sistem', function () {
        return view('pages.layanan.integrasi-sistem');
    })->name('integrasi-sistem');
});

Route::get('/produk', function () {
    return view('pages.produk');
})->name('produk');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/kontak-kami', function () {
    return view('pages.kontak-kami');
})->name('kontak-kami');

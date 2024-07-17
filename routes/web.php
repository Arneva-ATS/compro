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

    Route::get('nilai-nilai-perusahaan', function () {
        return view('pages.tentang-kami.nilai-nilai-perusahaan');
    })->name('nilai-nilai-perusahaan');
});

Route::prefix('layanan')->name('layanan.')->group(function () {
    Route::get('konsultasi-it', function () {
        return view('pages.layanan.konsultasi-it');
    })->name('konsultasi-it');

    Route::get('integrasi-sistem', function () {
        return view('pages.layanan.integrasi-sistem');
    })->name('integrasi-sistem');

    Route::get('pengembangan-perangkat-lunak', function () {
        return view('pages.layanan.pengembangan-perangkat-lunak');
    })->name('pengembangan-perangkat-lunak');

    Route::get('keamanan-siber', function () {
        return view('pages.layanan.keamanan-siber');
    })->name('keamanan-siber');

    Route::get('dukungan-it', function () {
        return view('pages.layanan.dukungan-it');
    })->name('dukungan-it');
});
Route::prefix('proyek-studi-kasus')->name('proyek-studi-kasus.')->group(function () {
    Route::get('proyek-terkini', function () {
        return view('pages.proyek-studi-kasus.proyek-terkini');
    })->name('proyek-terkini');
    Route::get('pet-clinic', function () {
        return view('pages.proyek-studi-kasus.pet-clinic');
    })->name('pet-clinic');
    Route::get('cms-web', function () {
        return view('pages.proyek-studi-kasus.cms-web');
    })->name('cms-web');
});
Route::prefix('solusi-bisnis')->name('solusi-bisnis.')->group(function () {
    Route::get('koperasi-digital', function () {
        return view('pages.solusi-bisnis.koperasi-digital');
    })->name('koperasi-digital');

    Route::get('rumah-sakit-digital', function () {
        return view('pages.solusi-bisnis.rumah-sakit-digital');
    })->name('rumah-sakit-digital');

    Route::get('manajemen-rantai-pemasok', function () {
        return view('pages.solusi-bisnis.manajemen-rantai-pemasok');
    })->name('manajemen-rantai-pemasok');

    Route::get('manajemen-gedung', function () {
        return view('pages.solusi-bisnis.manajemen-gedung');
    })->name('manajemen-gedung');
});
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('berita-pembaharuan', function () {
        return view('pages.blog.berita-pembaharuan');
    })->name('berita-pembaharuan');
    Route::get('artikel-teknologi', function () {
        return view('pages.blog.artikel-teknologi');
    })->name('artikel-teknologi');

});

Route::get('/karir', function () {
    return view('pages.karir.index');
})->name('karir');

// Route::get('/produk', function () {
//     return view('pages.karir.index');
// })->name('produk');

// Route::get('/blog', function () {
//     return view('pages.blog');
// })->name('blog');

Route::get('/kontak-kami', function () {
    return view('pages.kontak-kami');
})->name('kontak-kami');

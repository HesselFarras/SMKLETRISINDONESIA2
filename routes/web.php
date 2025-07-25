<?php

use Illuminate\Support\Facades\Route;

// Halaman Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman Tentang Sekolah
Route::get('/tentang', function () {
    return view('about');
})->name('about');

// Halaman Jurusan
Route::get('/jurusan', function () {
    return view('department');
})->name('department');

// Halaman PPDB
Route::get('/ppdb', function () {
    return view('ppdb');
})->name('ppdb');

// Halaman Berita
Route::get('/berita', function () {
    return view('news');
})->name('berita');

// Halaman Formulir Pendaftaran
Route::get('/registration', function () {
    return view('registration');
})->name('registration');

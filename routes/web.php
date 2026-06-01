<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda.index');
});

Route::get('/beranda', function () {
    return view('beranda.index');
});

Route::get('/cari-kerja', function () {
    return view('cari_kerja.index');
});

Route::get('/perusahaan', function () {
    return view('perusahaan.index');
});

Route::get('/tips-karir', function () {
    return view('tips_karir.index');
});

Route::get('/forgot-password', function () {
    return view('forgot_password.index');
});

Route::get('/login', function () {
    return view('login.index');
});

Route::get('/daftar', function () {
    return view('daftar.index');
});

Route::get('/password-baru', function () {
    return view('password_baru.index');
});

Route::get('/lupa-password', function () {
    return view('lupa_password.index');
});

/* Front-end-only auth views */
Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');
Route::view('/forgot-password', 'auth.forgot');
Route::view('/password-baru', 'auth.password-baru');
Route::view('/verify', 'auth.verify');
Route::view('/pelatihan', 'pelatihan.index');

// FAQ page
Route::get('/faq', function () {
    return view('faq.index');
});

// Company profile page
Route::get('/company-profile', function () {
    return view('perusahaan.profile');
});;

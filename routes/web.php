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

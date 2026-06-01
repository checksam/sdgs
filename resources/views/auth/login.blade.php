@extends('layouts.app')

@section('content')
<div class="section">
    <div class="section-container">
        <div class="form-container">
            <div class="form-image">
                <img src="{{ asset('gambar/login/focus.png') }}" alt="Hero Image">
                <h3 style="margin-top:16px; font-size:28px; color:#0E1E3F;">Your next chapter<br>begins here.</h3>
                <p style="color:#666; max-width:360px;">Join thousands of professionals finding their dream roles through a platform built for clarity, speed, and success.</p>
            </div>

            <div class="form-content">
                <h2 class="form-title">Welcome Back</h2>
                <p class="form-subtitle">Log in ke akun Anda</p>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" placeholder="nama@contoh.com">
                </div>

                <div class="form-group">
                    <label>Kata Sandi</label>
                    <input type="password" placeholder="Masukkan Kata Sandi">
                </div>

                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:12px;">
                    <label style="font-size:13px;"><input type="checkbox"> Ingat saya</label>
                    <a href="/forgot-password" style="color:#0066FF; text-decoration:none;">Lupa Kata Sandi</a>
                </div>

                <a href="/" class="search-button">Log In</a>

                <p style="text-align:center; margin:14px 0 0; color:#666;">Belum punya akun? <a href="/register" style="color:#0066FF">Daftar</a></p>

                <div style="margin-top:18px; display:flex; gap:12px;">
                    <button class="social-btn">f</button>
                    <button class="social-btn">G</button>
                    <button class="social-btn"></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="section">
    <div class="section-container">
        <div class="form-container">
            <div class="form-image">
                <img src="{{ asset('gambar/login/focus.png') }}" alt="Hero Image">
                <h3 style="margin-top:16px; font-size:28px; color:#00236F;">Your next chapter<br>begins here.</h3>
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
                    <button class="social-btn" type="button">
                        <img src="{{ asset('gambar/login/facebook.png') }}" alt="Facebook">
                    </button>
                    <button class="social-btn" type="button">
                        <img src="{{ asset('gambar/login/google.png') }}" alt="Google">
                    </button>
                    <button class="social-btn" type="button">
                        <img src="{{ asset('gambar/login/apple.png') }}" alt="Apple">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
        <style>
            nav.navbar, .footer { display: none !important; }
            .main-content { padding: 0; }
            body { background: #F5F7FC; }
            .section, .section-container { min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 0; }
            .form-container { width: min(920px, 100%); min-height: 100vh; display: grid; grid-template-columns: 1fr 480px; gap: 36px; align-items: center; padding: 40px; box-sizing: border-box; }
            .form-image { display: flex; flex-direction: column; gap: 24px; }
            .form-image img { width: 100%; border-radius: 24px; box-shadow: 0 30px 80px rgba(14,30,63,0.12); }
            .form-content { padding: 32px; background: #FFFFFF; border-radius: 24px; box-shadow: 0 24px 80px rgba(14,30,63,0.08); }
            @media (max-width: 900px) {
                .form-container { grid-template-columns: 1fr; padding: 24px; }
                .form-content { width: 100%; }
            }
        </style>

        @endsection

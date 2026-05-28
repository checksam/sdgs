@extends('layouts.app')

@section('content')
<div class="section" style="padding: 40px 20px;">
    <div class="form-container">
        <div class="form-content">
            <h1 class="form-title">Login</h1>
            <p class="form-subtitle">Log in ke akun Anda</p>

            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="nathalion@gmail.com" required>
                </div>

                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" placeholder="••••••••••••••••" required>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" id="remember">
                    <label for="remember">Ingat saya</label>
                    <a href="/forgot-password" style="margin-left: auto;">Lupa Kata Sandi</a>
                </div>

                <button type="submit" class="form-submit">Log In</button>
            </form>

            <div class="form-link">
                Belum punya akun? <a href="/daftar">Daftar</a>
            </div>

            <div class="form-divider">Atau Log In Dengan</div>

            <div class="social-buttons">
                <button class="social-btn" title="Facebook">f</button>
                <button class="social-btn" title="Google">G</button>
                <button class="social-btn" title="Apple">🍎</button>
            </div>
        </div>

        <div class="form-image">
            <img src="{{ asset('gambar/beranda/Icon.png') }}" alt="Login Image">
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="section" style="padding: 40px 20px;">
    <div class="form-container">
        <div class="form-content">
            <a href="/login" class="form-back-link">← Kembali Ke Login</a>
            
            <h1 class="form-title">Lupa Kata Sandi?</h1>
            <p class="form-subtitle">Masukkan email Anda di bawah ini untuk memulihkan kata sandi Anda.</p>

            <form>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="nathalion@gmail.com" required>
                </div>

                <button type="submit" class="form-submit">Kirim</button>
            </form>

            <div class="form-link" style="margin-top: 24px;">
                Atau <a href="/login">Log In Dengan</a>
            </div>

            <div class="form-divider">Atau</div>

            <div class="social-buttons">
                <button class="social-btn" title="Facebook">f</button>
                <button class="social-btn" title="Google">G</button>
                <button class="social-btn" title="Apple">🍎</button>
            </div>
        </div>

        <div class="form-image">
            <img src="{{ asset('gambar/beranda/Vector (2).png') }}" alt="Forgot Password Image">
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="section">
    <div class="section-container">
        <div class="form-container">
            <div class="form-image">
                <img src="{{ asset('gambar/password baru/lupa-password.png') }}" alt="Password New Image">
                <h3 style="margin-top:16px; font-size:28px; color:#0E1E3F;">Buat Kata Sandi Baru</h3>
                <p style="color:#666; max-width:360px;">Please enter your new credentials to secure your account.</p>
            </div>

            <div class="form-content">
                <h2 class="form-title">Buat Kata Sandi Baru</h2>

                <div class="form-group"><label>Buat Kata Sandi</label><input type="password" placeholder="Masukkan Kata Sandi"></div>
                <div class="form-group"><label>Masukkan Ulang Kata Sandi</label><input type="password" placeholder="Masukkan Ulang Kata Sandi"></div>

                <a href="/login" class="search-button">Atur Ulang</a>
            </div>
        </div>
    </div>
</div>
@endsection

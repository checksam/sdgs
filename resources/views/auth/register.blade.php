@extends('layouts.app')

@section('content')
<div class="section">
    <div class="section-container">
        <div class="form-container">
            <div class="form-image">
                <img src="{{ asset('gambar/login & register/Frame 1000003535.png') }}" alt="Register Image">
                <h3 style="margin-top:16px; font-size:28px; color:#0E1E3F;">Start your journey to a<br>brighter career today.</h3>
                <p style="color:#666; max-width:360px;">Join thousands of professionals finding clarity and opportunity through our modern recruitment ecosystem.</p>
            </div>

            <div class="form-content">
                <h2 class="form-title">Daftar</h2>
                <p class="form-subtitle">Welcome! Please enter your details.</p>

                <div class="form-group-row">
                    <div class="form-group">
                        <label>Nama Depan</label>
                        <input type="text" placeholder="Masukkan Nama Depan">
                    </div>
                    <div class="form-group">
                        <label>Nama Belakang</label>
                        <input type="text" placeholder="Masukkan Nama Belakang">
                    </div>
                </div>

                <div class="form-group-row">
                    <div class="form-group"><label>Email</label><input type="email" placeholder="Masukkan Email"></div>
                    <div class="form-group"><label>Nomor Telepon</label><input type="text" placeholder="Masukkan Nomor Telepon"></div>
                </div>

                <div class="form-group"><label>Kata Sandi</label><input type="password" placeholder="Masukkan Kata Sandi"></div>
                <div class="form-group"><label>Konfirmasi Kata Sandi</label><input type="password" placeholder="Konfirmasi Kata Sandi"></div>

                <label style="display:flex; gap:8px; align-items:center;"><input type="checkbox"> Saya setuju dengan semua <a href="#" style="color:#0066FF">Syarat dan Kebijakan Privasi</a></label>

                <a href="/" class="search-button">Buat Akun</a>

                <p style="text-align:center; margin-top:12px; color:#666;">Sudah punya akun? <a href="/login" style="color:#0066FF">Log in</a></p>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="section" style="padding: 40px 20px;">
    <div class="form-container" style="grid-template-columns: 1fr 1fr;">
        <div class="form-image">
            <img src="{{ asset('gambar/register/.png') }}" alt="Register Image">
        </div>

        <div class="form-content">
            <h1 class="form-title">Daftar</h1>
            <p class="form-subtitle">Buat akun reolify baru</p>

            <form>
                <div class="form-group-row">
                    <div class="form-group">
                        <label for="first_name">Nama Depan</label>
                        <input type="text" id="first_name" placeholder="Masukkan Nama Depan" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Nama Belakang</label>
                        <input type="text" id="last_name" placeholder="Masukkan Nama Belakang" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Masukkan Email" required>
                </div>

                <div class="form-group-row">
                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <input type="tel" id="phone" placeholder="Masukkan Nomor Telepon" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" placeholder="••••••••••••••••" required>
                </div>

                <div class="form-group">
                    <label for="password_confirm">Konfirmasi Kata Sandi</label>
                    <input type="password" id="password_confirm" placeholder="••••••••••••••••" required>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" id="agree" required>
                    <label for="agree">Saya setuju dengan semua <a href="#" style="color: #E74C3C;">Syarat</a> dan <a href="#" style="color: #E74C3C;">Kebijakan Privasi</a></label>
                </div>

                <button type="submit" class="form-submit">Buat Akun</button>
            </form>

            <div class="form-link">
                Sudah punya akun? <a href="/login">Log in</a>
            </div>

            <div class="form-divider">Atau Daftar Dengan</div>

            <div class="social-buttons">
                <button class="social-btn" title="Facebook">f</button>
                <button class="social-btn" title="Google">G</button>
                <button class="social-btn" title="Apple">🍎</button>
            </div>
        </div>
    </div>
</div>
@endsection

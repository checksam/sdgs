@extends('layouts.app')

@section('content')
<div class="register-page-wrapper">
    <div class="register-card-container">
        <div class="register-panel register-panel-left">
            <div class="register-panel-left-inner">
                <div class="register-headline">
                    <h1>Start your journey to a<br><span>brighter career today.</span></h1>
                    <p>Join thousands of professionals finding clarity and opportunity through our modern recruitment ecosystem.</p>
                </div>
                <div class="register-image-box">
                    <img src="{{ asset('gambar/register/bersiaplah.png') }}" alt="Register Illustration">
                </div>
            </div>
        </div>

        <div class="register-panel register-panel-right">
            <div class="register-form-card">
                <div class="register-form-card-inner">
                    <h2>Daftar</h2>
                    <p class="register-form-subtitle">Welcome! Please enter your details.</p>

                    <div class="register-form-grid">
                        <div class="form-field">
                            <label for="first-name">Nama Depan</label>
                            <input id="first-name" type="text" placeholder="Masukkan Nama Depan">
                        </div>
                        <div class="form-field">
                            <label for="last-name">Nama Belakang</label>
                            <input id="last-name" type="text" placeholder="Masukkan Nama Belakang">
                        </div>
                    </div>

                    <div class="register-form-grid">
                        <div class="form-field">
                            <label for="email">Email</label>
                            <input id="email" type="email" placeholder="Masukkan Email">
                        </div>
                        <div class="form-field">
                            <label for="phone">Nomor Telepon</label>
                            <input id="phone" type="tel" placeholder="Masukkan Nomor Telepon">
                        </div>
                    </div>

                    <div class="form-field">
                        <label for="password">Kata Sandi</label>
                        <div class="password-field">
                            <input id="password" type="password" placeholder="Masukkan Kata Sandi">
                            <button type="button" class="password-toggle" aria-label="Toggle password visibility">👁</button>
                        </div>
                    </div>
                    <div class="form-field">
                        <label for="confirm-password">Konfirmasi Kata Sandi</label>
                        <div class="password-field">
                            <input id="confirm-password" type="password" placeholder="Konfirmasi Kata Sandi">
                            <button type="button" class="password-toggle" aria-label="Toggle password visibility">👁</button>
                        </div>
                    </div>

                    <label class="form-checkbox">
                        <input type="checkbox">
                        <span>Saya setuju dengan semua <a href="#">Syarat</a> dan <a href="#">Kebijakan Privasi</a></span>
                    </label>

                    <button class="form-submit" type="button">Buat Akun</button>

                    <p class="form-link">Sudah punya akun? <a href="/login">Log in</a></p>

                    <div class="divider"><span>Atau Daftar Dengan</span></div>

                    <div class="social-grid">
                        <a href="#" class="social-button">
                            <img src="{{ asset('gambar/register/facebook.png') }}" alt="Facebook">
                        </a>
                        <a href="#" class="social-button">
                            <img src="{{ asset('gambar/register/google.png') }}" alt="Google">
                        </a>
                        <a href="#" class="social-button">
                            <img src="{{ asset('gambar/register/apple.png') }}" alt="Apple">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    nav.navbar, .footer { display: none !important; }
    .main-content { padding: 0; }
    body { background: #F5F7FC; }
    .register-page-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 24px;
    }
    .register-card-container {
        width: min(1180px, 100%);
        display: grid;
        grid-template-columns: 40% 60%;
        gap: 28px;
        align-items: stretch;
    }
    .register-panel-left {
        background: transparent;
        padding: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .register-panel-left-inner {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 32px;
    }
    .register-headline h1 {
        margin: 0;
        font-size: 44px;
        line-height: 1.05;
        font-weight: 800;
        color: #0D3E85;
    }
    .register-headline h1 span {
        display: inline-block;
        background: linear-gradient(90deg, #0D4FAA 0%, #1EA374 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .register-headline p {
        margin: 24px 0 0;
        color: #5F6A86;
        font-size: 16px;
        line-height: 1.8;
        max-width: 440px;
    }
    .register-image-box {
        border-radius: 32px;
        overflow: hidden;
        box-shadow: 0 32px 80px rgba(0,0,0,0.25);
    }
    .register-image-box img {
        width: 100%;
        display: block;
        object-fit: cover;
        min-height: 420px;
    }
    .register-panel-right {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .register-form-card {
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        background: #FFFFFF;
        border-radius: 32px;
        box-shadow: 0 32px 80px rgba(14, 30, 63, 0.12);
        border: 1px solid rgba(13, 79, 170, 0.08);
    }
    .register-form-card-inner {
        padding: 36px 32px;
        min-height: 420px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .register-form-card h2 {
        margin: 0 0 10px;
        font-size: 36px;
        font-weight: 800;
        color: #0D3E85;
    }
    .register-form-subtitle {
        margin: 0 0 32px;
        font-size: 15px;
        color: #6E7688;
    }
    .register-form-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 16px;
        margin-bottom: 16px;
    }
    .form-field {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .form-field label {
        font-size: 13px;
        font-weight: 600;
        color: #5F6A86;
    }
    .form-field input {
        width: 100%;
        height: 58px;
        padding: 16px 18px;
        border: 1px solid #E6EBF7;
        border-radius: 18px;
        background: #F7F8FD;
        font-size: 15px;
        color: #1F2A44;
    }
    .form-field input:focus {
        outline: none;
        border-color: #0D4FAA;
        box-shadow: 0 0 0 4px rgba(13, 79, 170, 0.08);
    }
    .password-field {
        position: relative;
        display: flex;
        align-items: center;
    }
    .password-field input {
        width: 100%;
        padding-right: 52px;
    }
    .password-toggle {
        position: absolute;
        right: 16px;
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        border: none;
        cursor: pointer;
        font-size: 18px;
    }
    .form-checkbox {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin: 24px 0 32px;
        color: #5F6A86;
        font-size: 14px;
    }
    .form-checkbox input {
        width: 18px;
        height: 18px;
        margin-top: 4px;
        accent-color: #0D4FAA;
    }
    .form-checkbox a {
        color: #E01E3D;
        font-weight: 700;
        text-decoration: none;
    }
    .form-submit {
        width: 100%;
        padding: 18px 20px;
        border: none;
        border-radius: 16px;
        background: #0D4FAA;
        color: #FFFFFF;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
    }
    .form-link {
        text-align: center;
        margin: 18px 0 0;
        font-size: 14px;
        color: #6E7688;
    }
    .form-link a {
        color: #0D4FAA;
        text-decoration: none;
        font-weight: 700;
    }
    .divider {
        display: flex;
        align-items: center;
        gap: 16px;
        margin: 34px 0 20px;
    }
    .divider::before,
    .divider::after {
        content: '';
        flex: 1;
        height: 1px;
        background: #E9EDF6;
    }
    .divider span {
        color: #8F95A1;
        font-size: 13px;
        letter-spacing: 0.08em;
    }
    .social-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 16px;
    }
    .social-button {
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #0D4FAA;
        border-radius: 12px;
        padding: 16px 0;
        background: #FFFFFF;
    }
    .social-button img {
        width: 24px;
        height: auto;
    }
    @media (max-width: 1024px) {
        .register-card-container {
            grid-template-columns: 1fr;
        }
        .register-panel-left,
        .register-panel-right {
            padding: 32px 0;
        }
        .register-form-card-inner {
            padding: 36px 30px;
            min-height: auto;
        }
    }
    @media (max-width: 720px) {
        .register-page-wrapper {
            padding: 40px 16px;
        }
        .register-panel-left {
            padding: 32px;
            border-radius: 28px;
        }
        .register-panel-right {
            padding: 0;
        }
        .register-form-card {
            border-radius: 28px;
        }
        .register-form-card-inner {
            padding: 30px 20px;
        }
        .register-headline h1 {
            font-size: 34px;
        }
    }
</style>
@endsection

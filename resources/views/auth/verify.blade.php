@extends('layouts.app')

@section('content')
<div class="section">
    <div class="section-container">
        <div style="max-width:560px; margin:0 auto;">
            <div class="form-content" style="padding:40px;">
                <h2 class="form-title">Verifikasi Akun</h2>
                <p class="form-subtitle">Kami telah mengirimkan kode OTP ke email Anda. Masukkan kode tersebut di bawah ini.</p>

                <div style="display:flex; gap:12px; justify-content:center; margin:22px 0 8px;">
                    <input style="width:48px; height:48px; text-align:center; border-radius:8px; border:1px solid #E8E8E8;" maxlength="1">
                    <input style="width:48px; height:48px; text-align:center; border-radius:8px; border:1px solid #E8E8E8;" maxlength="1">
                    <input style="width:48px; height:48px; text-align:center; border-radius:8px; border:1px solid #E8E8E8;" maxlength="1">
                    <input style="width:48px; height:48px; text-align:center; border-radius:8px; border:1px solid #E8E8E8;" maxlength="1">
                    <input style="width:48px; height:48px; text-align:center; border-radius:8px; border:1px solid #E8E8E8;" maxlength="1">
                    <input style="width:48px; height:48px; text-align:center; border-radius:8px; border:1px solid #E8E8E8;" maxlength="1">
                </div>

                <a href="/login" class="search-button">Verifikasi Sekarang</a>
            </div>
        </div>
    </div>
</div>
@endsection

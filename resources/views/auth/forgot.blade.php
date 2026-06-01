@extends('layouts.app')

@section('content')
<div style="padding:40px 20px; background-color:#F8FAFB;">
    <div style="max-width:560px; margin:0 auto;">
        <a href="/login" style="color:#0066FF; text-decoration:none; font-size:14px; margin-bottom:32px; display:inline-block;">← Kembali ke Login</a>
        
        <div style="background:white; border-radius:12px; padding:48px 40px; box-shadow:0 2px 8px rgba(0,0,0,0.08);">
            <!-- Icon -->
            <div style="text-align:center; margin-bottom:24px;">
                <img src="{{ asset('gambar/forgot password/Icon (3).png') }}" alt="Icon" style="width:48px; height:48px;">
            </div>

            <!-- Heading -->
            <h2 style="font-size:28px; color:#0E1E3F; text-align:center; margin-bottom:16px;">Lupa Kata Sandi?</h2>

            <!-- Description -->
            <p style="color:#666; text-align:center; font-size:14px; line-height:1.6; margin-bottom:32px;">
                Masukkan alamat email yang terdaftar pada akun HireAble Anda. Kami akan mengirimkan instruksi untuk mengatur ulang kata sandi Anda.
            </p>

            <!-- Form -->
            <div style="margin-bottom:24px;">
                <label style="display:block; font-size:13px; font-weight:600; color:#0E1E3F; margin-bottom:8px;">Alamat Email</label>
                <div style="position:relative;">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" style="position:absolute; left:12px; top:50%; transform:translateY(-50%); color:#999;">
                        <path d="M2 4L8 8L14 4M2 4V12C2 12.5304 2.21071 13.0391 2.58579 13.4142C2.96086 13.7893 3.46957 14 4 14H12C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12V4M2 4C2 3.46957 2.21071 2.96086 2.58579 2.58579C2.96086 2.21071 3.46957 2 4 2H12C12.5304 2 13.0391 2.21071 13.4142 2.58579C13.7893 2.96086 14 3.46957 14 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <input type="email" placeholder="nama@email.com" style="width:100%; padding:10px 12px 10px 36px; border:1px solid #E8E8E8; border-radius:8px; font-size:13px;">
                </div>
            </div>

            <!-- Submit Button -->
            <a href="/password-baru" style="display:block; text-align:center; background-color:#00236F; color:white; padding:12px 24px; border-radius:8px; text-decoration:none; font-weight:600; font-size:14px; margin-bottom:24px; border:none; cursor:pointer;">
                Kirim Kode Verifikasi ➤
            </a>

            <!-- Divider -->
            <div style="border-top:1px solid #E8E8E8; margin-bottom:24px;"></div>

            <!-- Success Message -->
            <div style="background-color:#F0FAF8; border-left:4px solid #00236F; padding:12px 16px; border-radius:4px; margin-bottom:24px;">
                <p style="color:#0E1E3F; font-size:13px; margin:0;">
                    ✓ Keamanan Anda adalah prioritas kami.
                </p>
            </div>

            <!-- Support Link -->
            <p style="text-align:center; color:#666; font-size:13px;">
                Butuh bantuan lebih lanjut? <a href="#" style="color:#0066FF; text-decoration:none;">Hubungi Layanan Bantuan</a>
            </p>
        </div>
    </div>
</div>
@endsection

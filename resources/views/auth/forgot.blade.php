@extends('layouts.app')

@section('content')
<div style="padding:40px 20px; background-color:#F8FAFB; min-height:100vh; display:flex; align-items:center;">
    <div style="max-width:900px; margin:0 auto; width:100%;">
        <a href="/login" style="color:#00236F; text-decoration:none; font-size:14px; margin-bottom:24px; display:inline-block;">← Kembali ke Login</a>

        <div style="background:white; border-radius:12px; padding:40px; box-shadow:0 2px 8px rgba(0,0,0,0.08);">
            <!-- Top: Lock Image (centered, smaller) -->
            <div style="text-align:center; margin-bottom:12px;">
                <div style="width:64px; height:64px; background:#F3F7FF; border-radius:12px; margin:0 auto; display:flex; align-items:center; justify-content:center;">
                    <img src="{{ asset('gambar/forgot password/gembok.png') }}" alt="Gembok" style="width:32px; height:32px; object-fit:contain;">
                </div>

                <h2 style="font-size:28px; color:#0E1E3F; margin:12px 0 8px 0;">Lupa Kata Sandi?</h2>
                <p style="color:#666; font-size:14px; line-height:1.6; margin:0 auto 16px; max-width:560px;">Masukkan alamat email yang terdaftar pada akun HireAble Anda. Kami akan mengirimkan instruksi untuk mengatur ulang kata sandi Anda.</p>
            </div>

            <!-- Form -->
            <div style="max-width:560px; margin:0 auto; text-align:center;">
                <div style="margin-bottom:16px; position:relative;">
                    <label style="display:block; font-size:13px; font-weight:600; color:#0E1E3F; margin-bottom:8px; text-align:left;">Alamat Email</label>
                    <div style="position:relative;">
                        <span style="position:absolute; left:12px; top:50%; transform:translateY(-50%); color:#9AA3B2;">
                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 2.25C1 1.56 1.56 1 2.25 1H15.75C16.44 1 17 1.56 17 2.25V11.75C17 12.44 16.44 13 15.75 13H2.25C1.56 13 1 12.44 1 11.75V2.25Z" stroke="#9AA3B2" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 3.5L9 8.25L16 3.5" stroke="#9AA3B2" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        <input type="email" placeholder="nama@email.com" style="width:100%; padding:12px 14px 12px 42px; border:1px solid #E8E8E8; border-radius:8px; font-size:13px;">
                    </div>
                </div>

                <a href="/password-baru" style="display:block; width:100%; text-align:center; background-color:#1E9B44; color:white; padding:14px 18px; border-radius:8px; text-decoration:none; font-weight:600; font-size:15px; margin-bottom:16px;">Kirim Kode Verifikasi <span style="display:inline-block; margin-left:8px;">➤</span></a>

                <hr style="border:none; border-top:1px solid #E9EDF1; margin:16px 0;">

                <div style="margin-top:6px; background:#F3F7FF; padding:12px 14px; border-radius:8px; display:inline-flex; align-items:center; gap:10px;">
                    <div style="width:28px; height:28px; background:#FFFFFF; border-radius:6px; display:flex; align-items:center; justify-content:center;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 1.5C6.201 1.5 1.5 6.201 1.5 12C1.5 17.799 6.201 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.201 17.799 1.5 12 1.5Z" stroke="#0E1E3F" stroke-width="0.8"/><path d="M9.5 12.5L11.2 14.2L15.5 9.9" stroke="#0E1E3F" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </div>
                    <p style="color:#0E1E3F; font-size:13px; margin:0;">Keamanan Anda adalah prioritas kami.</p>
                </div>

                <p style="color:#666; font-size:13px; margin-top:18px; text-align:center;">Butuh bantuan lebih lanjut? <a href="#" style="color:#00236F; text-decoration:none;">Hubungi Layanan Bantuan</a></p>
            </div>
        </div>
    </div>
</div>
        <style>
            nav.navbar, .footer { display: none !important; }
            body { background: #F8FAFB; }
            div[style*="min-height:100vh"] { min-height: 100vh; }
            /* Ensure the inner container centers vertically */
            .register-center-fix { display:flex; align-items:center; justify-content:center; }
        </style>

        @endsection

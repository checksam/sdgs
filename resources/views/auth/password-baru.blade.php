@extends('layouts.app')

@section('content')
<div class="password-reset-page">
    <div class="password-reset-container">
        <div class="reset-left">
            <div class="reset-left-inner">
                <div class="reset-image">
                    <img src="{{ asset('gambar/password baru/Context.png') }}" alt="Illustration">
                </div>
            </div>
        </div>

        <div class="reset-right">
            <div class="reset-card">
                <div class="reset-card-inner">
                    <h2>Buat Kata Sandi Baru</h2>
                    <p class="reset-sub">Please enter your new credentials to secure your account.</p>

                    <div class="floating-group">
                        <input id="new-password" type="password" placeholder=" " />
                        <label for="new-password">Buat Kata Sandi</label>
                        <button type="button" class="password-toggle">👁</button>
                    </div>

                    <div class="floating-group">
                        <input id="confirm-password" type="password" placeholder=" " />
                        <label for="confirm-password">Masukkan Ulang Kata Sandi</label>
                        <button type="button" class="password-toggle">👁</button>
                    </div>

                    <div class="pw-rules">
                        <div class="rule"><span class="dot"></span> Min. 8 characters</div>
                        <div class="rule"><span class="dot"></span> One number</div>
                        <div class="rule"><span class="dot"></span> Special character</div>
                        <div class="rule"><span class="dot"></span> Capital letter</div>
                    </div>

                    <button class="reset-submit">Atur Ulang</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    nav.navbar, .footer { display: none !important; }
    .password-reset-page { min-height: 100vh; display:flex; align-items:center; justify-content:center; padding:48px 24px; background:#F5F7FC; }
    .password-reset-container { width: min(1180px, 100%); display:grid; grid-template-columns: 1fr 520px; gap:32px; align-items:stretch; }
    .reset-left { background: transparent; color:#00236F; border-radius:28px; padding:0; display:flex; align-items:center; justify-content:center; }
    .reset-left-inner { max-width:520px; padding:0; }
    .reset-image img { width:100%; border-radius:12px; box-shadow: none; display:block; }

    .reset-right { display:flex; align-items:center; justify-content:center; }
    .reset-card { width:100%; max-width:520px; background:#fff; border-radius:28px; box-shadow:0 32px 80px rgba(14,30,63,0.12); border:1px solid rgba(13,79,170,0.06); }
    .reset-card-inner { padding:44px; }
    .reset-card-inner h2 { margin:0 0 8px; font-size:32px; color:#0D3E85; }
    .reset-sub { margin:0 0 20px; color:#6E7688; }

    .floating-group { position:relative; margin-bottom:16px; }
    .floating-group input { width:100%; height:56px; padding:18px 48px 0 18px; border-radius:12px; border:1px solid #E6EBF7; background:#F7F8FD; }
    .floating-group label { position:absolute; left:18px; top:50%; transform:translateY(-50%); color:#8F95A1; font-size:14px; transition: all .18s; }
    .floating-group input:focus + label, .floating-group input:not(:placeholder-shown) + label { top:12px; transform:none; font-size:12px; color:#0D4FAA; }
    .password-toggle { position:absolute; right:12px; top:50%; transform:translateY(-50%); background:transparent; border:none; cursor:pointer; font-size:16px; }

    .pw-rules { display:grid; grid-template-columns:1fr 1fr; gap:8px 16px; margin:12px 0 20px; color:#6E7688; font-size:13px; }
    .pw-rules .rule { display:flex; align-items:center; gap:8px; }
    .pw-rules .dot { width:12px; height:12px; border-radius:50%; background:#E9EEF7; display:inline-block; }

    .reset-submit { width:100%; padding:14px 18px; border-radius:12px; background:#0D4FAA; color:#fff; border:none; font-weight:700; cursor:pointer; }

    @media (max-width: 1024px) { .password-reset-container { grid-template-columns: 1fr; } .reset-left { order:2; } .reset-right { order:1; padding-bottom:20px; } }
    @media (max-width: 720px) { .reset-card-inner { padding:28px; } .reset-left { padding:28px; } .reset-left h1 { font-size:32px; } }
</style>

@endsection

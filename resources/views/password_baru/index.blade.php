@extends('layouts.app')

@section('content')
<div class="section" style="padding: 40px 20px;">
    <div class="form-container">
        <div class="form-content">
            <h1 class="form-title">Buat Kata Sandi Baru</h1>
            <p class="form-subtitle">Silakan atur kata sandi baru untuk akun Anda.</p>

            <form>
                <div class="form-group">
                    <label for="password">Buat Kata Sandi</label>
                    <input type="password" id="password" placeholder="7789BM6X@eH&SK..." required>
                </div>

                <div class="form-group">
                    <label for="password_confirm">Masukkan Ulang Kata Sandi</label>
                    <input type="password" id="password_confirm" placeholder="7789BM6X@eH&SK..." required>
                </div>

                <button type="submit" class="form-submit">Atur Ulang</button>
            </form>
        </div>

        <div class="form-image">
            <img src="{{ asset('gambar/beranda/Icon (1).png') }}" alt="New Password Image">
        </div>
    </div>
</div>
@endsection

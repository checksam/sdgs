@extends('layouts.app')

@section('content')
<div class="page-shell">
    <div class="hero-card">
        <h1 class="hero-title">LANDING PAGE</h1>

        <div class="layout-area">
            <div class="left-column">
                <div class="preview-area">
                    <div class="preview-large">
                        <img src="{{ asset('gambar/beranda/Group.png') }}" alt="Preview Beranda">
                    </div>

                    <div class="bottom-row-wrapper">
                        <div class="bottom-row">
                            <div class="preview-mini">
                                <img src="{{ asset('gambar/login & register/Frame 1000003535.png') }}" alt="Preview Login Register">
                            </div>
                            <div class="preview-mini">
                                <img src="{{ asset('gambar/password baru/Frame 1000003557.png') }}" alt="Preview Password Baru">
                            </div>
                            <div class="preview-mini">
                                <img src="{{ asset('gambar/beranda/Happy Professional.png') }}" alt="Preview Beranda 2">
                            </div>
                            <div class="preview-mini">
                                <img src="{{ asset('gambar/perusahaan/TechNova Solutions.png') }}" alt="Preview Perusahaan">
                            </div>
                            <div class="preview-mini">
                                <img src="{{ asset('gambar/carii kerja/Company Logo (1).png') }}" alt="Preview Cari Kerja">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="top-right-block">
                <div class="preview-small">
                    <img src="{{ asset('gambar/carii kerja/Company Logo.png') }}" alt="Preview Cari Kerja 1">
                </div>
                <div class="preview-small">
                    <img src="{{ asset('gambar/forgot password/Frame 1000003558.png') }}" alt="Preview Forgot Password">
                </div>
            </div>

            <div class="blank-panel"></div>
        </div>
    </div>
</div>
@endsection

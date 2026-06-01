@extends('layouts.app')

@section('content')
<div class="faq-hero">
    <div class="faq-hero-inner">
        <h1>Pertanyaan yang Sering Diajukan</h1>
        <p>Temukan jawaban cepat atas pertanyaan Anda tentang platform HireAble.</p>
        <div class="faq-search">
            <svg class="faq-search-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="11" cy="11" r="7" stroke="#0E1E3F" stroke-width="2"/>
                <path d="M16.5 16.5L21 21" stroke="#0E1E3F" stroke-width="2" stroke-linecap="round"/>
            </svg>
            <input type="text" placeholder="Cari jawaban atas pertanyaan Anda...">
        </div>
    </div>
</div>

<div class="faq-container">
    <div class="faq-grid">
        <aside class="faq-sidebar">
            <h4>KATEGORI</h4>
            <ul class="faq-categories">
                <li class="active">Semua FAQ</li>
                <li>Untuk Pencari Kerja</li>
                <li>Untuk Perusahaan</li>
                <li>Umum</li>
            </ul>
        </aside>

        <main class="faq-main">
            <div class="faq-section">
                <h3><img src="{{ asset('gambar/FAQ/perusahaan.png') }}" alt="perusahaan" class="section-icon-img"> Untuk Perusahaan</h3>
                <div class="faq-card">
                    <div class="faq-card-header">
                        <div class="faq-question">Bagaimana cara memposting lowongan pekerjaan atau mendaftarkan sebuah perusahaan?</div>
                        <span class="faq-expand">▼</span>
                    </div>
                    <div class="faq-card-body">Untuk memposting lowongan pekerjaan atau mendaftarkan perusahaan Anda, silakan hubungi tim admin kami. Anda akan diminta untuk mengisi formulir pendaftaran mitra yang akan disediakan untuk proses verifikasi.
                        <div class="faq-card-meta">
                            <a href="#"><img src="{{ asset('gambar/FAQ/mail.png') }}" alt="mail" class="meta-icon"> Hubungi Admin</a>
                            <a href="#"><img src="{{ asset('gambar/FAQ/kertas.png') }}" alt="kertas" class="meta-icon"> Lihat Syarat & Ketentuan</a>
                        </div>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <img src="{{ asset('gambar/FAQ/pesan.png') }}" alt="waktu" class="faq-icon">
                        <div class="faq-question">Berapa lama proses verifikasi akun perusahaan?</div>
                        <span class="faq-expand">▼</span>
                    </div>
                    <div class="faq-card-body">Proses verifikasi umumnya memakan waktu 1-3 hari kerja tergantung kelengkapan dokumen yang Anda berikan.</div>
                </div>
            </div>

            <div class="faq-section">
                <h3><img src="{{ asset('gambar/FAQ/user.png') }}" alt="user" class="section-icon-img"> Untuk Pencari Kerja</h3>
                <div class="faq-card">
                    <div class="faq-card-header">
                        <img src="{{ asset('gambar/FAQ/CS.png') }}" alt="support" class="faq-icon">
                        <div class="faq-question">Bagaimana cara memperbarui profil profesional saya?</div>
                        <span class="faq-expand">▼</span>
                    </div>
                    <div class="faq-card-body">Masuk ke akun Anda, buka halaman profil, dan pilih "Edit Profil" untuk memperbarui informasi pendidikan, pengalaman, dan keahlian Anda.</div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <div class="faq-question">Apakah ada biaya untuk melamar pekerjaan di HireAble?</div>
                        <span class="faq-expand">▼</span>
                    </div>
                    <div class="faq-card-body">Tidak, pelamar kerja dapat melamar ke lowongan yang tersedia tanpa biaya tambahan.</div>
                </div>
            </div>
        </main>
    </div>
</div>

<div class="faq-cta-section">
    <div class="faq-cta-inner">
        <h2>Masih punya pertanyaan?</h2>
        <p>Jika Anda tidak dapat menemukan jawaban yang dicari, tim dukungan kami siap membantu Anda secara langsung.</p>
        <div class="faq-cta-buttons">
            <a href="#" class="btn-cta-primary">
                <img src="{{ asset('gambar/FAQ/CS.png') }}" alt="cs" class="cta-icon"> Hubungi Tim Dukungan
            </a>
            <a href="#" class="btn-cta-secondary">
                <img src="{{ asset('gambar/FAQ/pesan.png') }}" alt="pesan" class="cta-icon"> Live Chat Sekarang
            </a>
        </div>
    </div>
</div>

@endsection

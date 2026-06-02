@extends('layouts.app')

@section('content')
<div class="section tips-page">
    <div class="section-container">
        <div class="tips-hero">
            <div class="tips-hero-grid">
                <div class="tips-hero-image-card">
                    <img src="{{ asset('gambar/tips_karir/Resume Building.png') }}" alt="Rahasia CV Tembus ATS" class="tips-hero-image">
                </div>
                <div class="tips-hero-copy-card">
                    <span class="tips-hero-badge">Resume Tips</span>
                    <h1 class="tips-hero-title">Rahasia CV Tembus ATS: Panduan Lengkap 2026</h1>
                    <p class="tips-hero-text">Pelajari bagaimana menyusun resume yang tidak hanya menarik di mata recruiter, tetapi juga ramah bagi sistem penyaringan otomatis (ATS).</p>
                    <div class="tips-hero-details">
                        <span>24 Mei 2026</span>
                        <span>Admin HireAble</span>
                    </div>
                    <a href="#" class="tips-hero-cta">Baca Selengkapnya</a>
                </div>
            </div>

            <div class="tips-filters">
                <button class="tips-pill tips-pill--active">Semua Artikel</button>
                <button class="tips-pill">Wawancara</button>
                <button class="tips-pill">Branding</button>
                <button class="tips-pill">Produktivitas</button>
                <button class="tips-pill">Gaji</button>
                <button class="tips-pill">Soft Skills</button>
            </div>

            <div class="tips-grid">
                <article class="tips-card">
                    <div class="tips-card-figure">
                        <img src="{{ asset('gambar/tips_karir/Interview Skills.png') }}" alt="Pertanyaan Jebakan Wawancara">
                    </div>
                    <div class="tips-card-body">
                        <span class="tips-card-category">Wawancara</span>
                        <h2 class="tips-card-title">5 Pertanyaan Jebakan Wawancara Kerja dan Cara Menjawabnya</h2>
                        <div class="tips-card-meta">
                            <span>22 Mei 2024</span>
                            <span>Sarah Wijaya</span>
                        </div>
                        <a href="#" class="tips-card-link">Baca</a>
                    </div>
                </article>

                <article class="tips-card">
                    <div class="tips-card-figure">
                        <img src="{{ asset('gambar/tips_karir/Personal Branding.png') }}" alt="Membangun Personal Brand">
                    </div>
                    <div class="tips-card-body">
                        <span class="tips-card-category">Branding</span>
                        <h2 class="tips-card-title">Membangun Personal Brand yang Kuat di Dunia Karir</h2>
                        <div class="tips-card-meta">
                            <span>20 Mei 2024</span>
                            <span>Budi Pratama</span>
                        </div>
                        <a href="#" class="tips-card-link">Baca</a>
                    </div>
                </article>

                <article class="tips-card">
                    <div class="tips-card-figure">
                        <img src="{{ asset('gambar/tips_karir/Salary Negotiation.png') }}" alt="Negosiasi Gaji untuk Fresh Graduate">
                    </div>
                    <div class="tips-card-body">
                        <span class="tips-card-category">Gaji</span>
                        <h2 class="tips-card-title">Cara Negosiasi Gaji untuk Fresh Graduate</h2>
                        <div class="tips-card-meta">
                            <span>15 Mei 2024</span>
                            <span>Roni Wijaya</span>
                        </div>
                        <a href="#" class="tips-card-link">Baca</a>
                    </div>
                </article>

                <article class="tips-card">
                    <div class="tips-card-figure">
                        <img src="{{ asset('gambar/tips_karir/Soft Skills.png') }}" alt="Pentingnya Emotional Intelligence">
                    </div>
                    <div class="tips-card-body">
                        <span class="tips-card-category">Soft Skills</span>
                        <h2 class="tips-card-title">Pentingnya Emotional Intelligence di Dunia Kerja</h2>
                        <div class="tips-card-meta">
                            <span>12 Mei 2024</span>
                            <span>Indah Sari</span>
                        </div>
                        <a href="#" class="tips-card-link">Baca</a>
                    </div>
                </article>

                <article class="tips-card">
                    <div class="tips-card-figure">
                        <img src="{{ asset('gambar/tips_karir/productivity.png') }}" alt="Resume Building Tips">
                    </div>
                    <div class="tips-card-body">
                        <span class="tips-card-category">Resume Tips</span>
                        <h2 class="tips-card-title">Teknik Pomodoro: Kerja Efektif Tanpa Burnout</h2>
                        <div class="tips-card-meta">
                            <span>18 Mei 2024</span>
                            <span>Dina Amelia</span>
                        </div>
                        <a href="#" class="tips-card-link">Baca</a>
                    </div>
                </article>

                <article class="tips-card">
                    <div class="tips-card-figure">
                        <img src="{{ asset('gambar/tips_karir/Interview.png') }}" alt="Persiapan Wawancara Kerja">
                    </div>
                    <div class="tips-card-body">
                        <span class="tips-card-category">Wawancara</span>
                        <h2 class="tips-card-title">Persiapan Wawancara Kerja: Ceklis 24 Jam</h2>
                        <div class="tips-card-meta">
                            <span>10 Mei 2024</span>
                            <span>Admin HireAble</span>
                        </div>
                        <a href="#" class="tips-card-link">Baca</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.tips-card-link, .tips-hero-cta').forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                window.location.href = '/login';
            });
        });
    });
</script>
@endsection
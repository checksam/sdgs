@extends('layouts.app')

@section('content')
<div class="training-page">
    <div class="container">
        <div class="hero-card">
            <div class="hero-left">
                <div class="promo">PROMO TERBATAS</div>
                <h2>Diskon 50% Kursus Pertama</h2>
                <p>Mulai karir impianmu hari ini. Materi pilihan dari para ahli industri.</p>
                <a class="cta" href="#">Ambil Kursus →</a>
            </div>
            <div class="hero-right">
                <img src="{{ asset('gambar/pelatihan/team.png') }}" alt="hero" />
            </div>
        </div>

        <section class="popular">
            <div class="section-head">
                <h3>Kursus Populer</h3>
                <a href="#" class="see-all">Lihat Semua ›</a>
            </div>

            <div class="cards">
                <div class="course">
                    <img src="{{ asset('gambar/pelatihan/Container (2).png') }}" alt="course" />
                    <div class="course-body">
                        <div class="title">Full-Stack Web Development Pro 2024</div>
                        <div class="meta">Rp 849.000 • Alex Rivera, Senior Dev</div>
                    </div>
                </div>

                <div class="course">
                    <img src="{{ asset('gambar/pelatihan/UI Design.png') }}" alt="course" />
                    <div class="course-body">
                        <div class="title">UI/UX Design Masterclass: Industry Standards</div>
                        <div class="meta">Rp 799.000 • Sarah Jenkins, Lead Designer</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="certs">
            <h4>Sertifikasi Gratis</h4>
            <p>Akses materi sertifikasi resmi dari mitra global kami.</p>
            <div class="cert-grid">
                <div class="cert"><img src="{{ asset('gambar/pelatihan/text.png') }}" alt="google" /><div class="cert-title">Google Data Analytics</div><div class="cert-meta">6 Bulan • Sertifikat Resmi</div></div>
                <div class="cert"><img src="{{ asset('gambar/pelatihan/Icon (8).png') }}" alt="figma" /><div class="cert-title">Figma Design Systems</div><div class="cert-meta">4 Minggu • Badge Eksklusif</div></div>
                <div class="cert"><img src="{{ asset('gambar/pelatihan/Icon (9).png') }}" alt="marketing" /><div class="cert-title">Inbound Marketing</div><div class="cert-meta">3 Minggu • Partner Resmi</div></div>
            </div>
        </section>

        <section class="program">
            <div class="program-card">
                <div class="program-left">
                    <h5>PROGRAM UNGGULAN</h5>
                    <h3>Bootcamp Intensif HireAble</h3>
                    <p>Program akselerasi karir 12 minggu dengan jaminan interview di 500+ mitra perusahaan kami. Belajar langsung dari praktisi top.</p>
                    <div class="program-features">
                        <div class="feature">
                            <img src="{{ asset('gambar/pelatihan/Icon (5).png') }}" alt="placement" class="feature-icon" />
                            <div>
                                <div class="feature-title">Jaminan Penempatan</div>
                                <div class="feature-desc">Kami membantu Anda mendapatkan pekerjaan pertama dalam 6 bulan setelah lulus.</div>
                            </div>
                        </div>
                        <div class="feature">
                            <img src="{{ asset('gambar/pelatihan/Icon (6).png') }}" alt="mentoring" class="feature-icon" />
                            <div>
                                <div class="feature-title">Mentoring 1-on-1</div>
                                <div class="feature-desc">Sesi konsultasi pribadi setiap minggu untuk membahas progres dan portofolio Anda.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="program-right">
                    <div class="pill">
                        <img src="{{ asset('gambar/pelatihan/Icon (5).png') }}" alt="se" class="pill-icon" />
                        <div class="pill-content">
                            <strong>Software Engineering</strong>
                            <span>Batch 14 • Terbuka</span>
                        </div>
                        <button>Daftar</button>
                    </div>
                    <div class="pill">
                        <img src="{{ asset('gambar/pelatihan/Icon (6).png') }}" alt="ds" class="pill-icon" />
                        <div class="pill-content">
                            <strong>Data Science Pro</strong>
                            <span>Batch 13 • Penuh</span>
                        </div>
                        <button class="muted">Waiting List</button>
                    </div>
                    <div class="pill">
                        <img src="{{ asset('gambar/pelatihan/Icon (7).png') }}" alt="design" class="pill-icon" />
                        <div class="pill-content">
                            <strong>Digital Product Design</strong>
                            <span>Batch 15 • Segera</span>
                        </div>
                        <button>Daftar</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="categories">
            <h6>KATEGORI TERPOPULER</h6>
            <div class="chips">
                <span>Programming</span><span>Graphic Design</span><span>Data Analytics</span><span>Digital Marketing</span><span>Business Strategy</span><span>Communication</span><span>Mobile Development</span><span>+12 Lainnya</span>
            </div>
        </section>
    </div>
</div>

<style>
    .training-page { padding:56px 24px; background:#ffffff; }
    .container { max-width:1180px; margin:0 auto; }

    /* Hero */
    .hero-card { display:flex; gap:28px; background:linear-gradient(90deg,#0D4FAA 0%, #07335A 100%); padding:28px 34px; border-radius:28px; align-items:center; color:#fff; box-shadow: 0 30px 60px rgba(13,79,170,0.08); overflow:hidden; }
    .hero-left { flex:1; }
    .hero-left .promo{ background:rgba(255,255,255,0.12); display:inline-block; padding:8px 14px; border-radius:999px; font-size:12px; margin-bottom:12px; }
    .hero-left h2{ margin:6px 0 10px; font-size:28px; line-height:1.05; font-weight:800; }
    .hero-left p{ margin:0 0 18px; opacity:0.95; max-width:520px; }
    .hero-left .cta{ background:#1EA374; color:#fff; padding:12px 18px; border-radius:12px; text-decoration:none; display:inline-block; font-weight:700 }
    .hero-right{ width:480px; flex:0 0 480px; }
    .hero-right .img-wrap{ width:100%; height:160px; overflow:hidden; border-radius:16px; }
    .hero-right img{ width:100%; height:100%; object-fit:cover; display:block; }

    /* Popular courses */
    .popular { margin-top:40px; }
    .section-head{ display:flex; justify-content:space-between; align-items:center; margin-bottom:16px }
    .cards{ display:flex; gap:20px }
    .course{ background:#fff; border-radius:18px; box-shadow:0 30px 60px rgba(14,30,63,0.08); padding:18px; display:flex; gap:16px; align-items:center; width:48%; }
    .course .thumb{ width:140px; height:92px; border-radius:12px; overflow:hidden; flex:0 0 140px }
    .course .thumb img{ width:100%; height:100%; object-fit:cover; }
    .course .title{ font-weight:800; color:#0D3E85; margin-bottom:6px }
    .course .meta{ font-size:13px; color:#6E7688 }
    .course .price{ margin-top:10px; font-weight:700; }

    /* Certifications */
    .certs{ margin-top:48px }
    .certs h4{ margin-bottom:8px; }
    .certs > p{ margin-bottom:20px; }
    .cert-grid{ display:grid; grid-template-columns: repeat(3, 1fr); gap:24px; margin-top:16px }
    .cert{ background:#F4F8FB; border-radius:16px; padding:32px 24px; text-align:center; box-shadow: none }
    .cert img{ width:64px; height:64px; margin:0 auto 16px; display:block; }
    .cert-title{ font-weight:700; color:#0D3E85; margin-bottom:6px; }
    .cert-meta{ font-size:12px; color:#6E7688; }

    /* Program card */
    .program{ margin-top:44px }
    .program-card{ background:#E9F2FB; border-radius:20px; padding:32px; display:flex; gap:28px; }
    .program-left{ flex:1 }
    .program-left h5{ color:#00236F; margin:0 0 8px; font-weight:700; font-size:13px; letter-spacing:1px; }
    .program-left h3{ margin:0 0 12px; font-size:26px; color:#0D3E85 }
    .program-left p{ color:#4A5568; line-height:1.6; margin-bottom:16px; }
    .program-features{ display:flex; flex-direction:column; gap:16px; }
    .feature{ display:flex; gap:12px; align-items:flex-start; }
    .feature-icon{ width:40px; height:40px; flex:0 0 40px; display:block; }
    .feature-title{ font-weight:700; color:#0D3E85; }
    .feature-desc{ font-size:14px; color:#4A5568; }
    .program-right{ width:340px; display:flex; flex-direction:column; gap:12px; justify-content:flex-start; }
    .pill{ background:#fff; padding:14px 16px; border-radius:12px; display:flex; align-items:center; gap:12px; box-shadow: 0 6px 20px rgba(14,30,63,0.06) }
    .pill-icon{ width:32px; height:32px; flex:0 0 32px; display:block; }
    .pill-content{ flex:1; }
    .pill-content strong{ display:block; font-weight:700; color:#0D3E85; }
    .pill-content span{ color:#6E7688; font-size:13px; display:block; }
    .pill button{ background:#0D4FAA; color:#fff; border:none; padding:8px 16px; border-radius:10px; font-weight:700; cursor:pointer; white-space:nowrap; }
    .pill button:hover{ background:#0A2F5C; }
    .pill .muted{ background:#fff; border:1px solid #0D4FAA; color:#0D4FAA; }
    .pill .muted:hover{ background:#f5f8fc; }

    /* Categories chips */
    .categories{ margin:36px 0 80px; text-align:center }
    .chips span{ display:inline-block; background:#1EE0B0; color:#004255; padding:10px 14px; border-radius:999px; margin:8px; font-size:13px; font-weight:700 }

    /* Responsive */
    @media (max-width:1000px){ .hero-card{ flex-direction:column; align-items:flex-start; } .hero-right{ width:100%; } .hero-right .img-wrap{ height:220px } .cards{ flex-direction:column } .course{ width:100% }
    }

</style>

@endsection

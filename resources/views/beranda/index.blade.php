@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="hero">
    <div class="hero-wrapper">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Find Your Career Without <span class="hero-title-underline">Limits.</span></h1>
                <p class="hero-subtitle">Platform karir modern untuk semua kemampuan dan potensi.</p>
                
                <div class="hero-search">
                    <input type="text" class="search-input" placeholder="Cari pekerjaan, skill, perusahaan">
                    <div class="hero-lokasi">
                        <span>Lokasi</span>
                        <select class="search-select">
                            <option value="">Cari Lokasi</option>
                            <option value="jakarta">Jakarta</option>
                            <option value="bandung">Bandung</option>
                            <option value="surabaya">Surabaya</option>
                        </select>
                    </div>
                    <button class="search-button">Cari</button>
                </div>
            </div>
            <div class="hero-image-wrapper">
                <img src="{{ asset('gambar/beranda/gambar_orang.png') }}" alt="Career Professionals" class="hero-people">
            </div>
        </div>
        <div class="hero-wave">
            <img src="{{ asset('gambar/beranda/gelombang.png') }}" alt="Wave" class="wave-image">
        </div>
    </div>
</div>

<!-- Temukan Peluang Kerja Section -->
<div class="section">
    <div class="section-container">
        <h2 class="section-title">Temukan Peluang Kerja</h2>
        <p class="section-subtitle">Jelajahi peluang pekerjaan terbaik di berbagai industri dan level karir</p>
        
        <div class="carousel-container">
            <div class="carousel-item">
                <img src="{{ asset('gambar/beranda/Group 6.png') }}" alt="Sales">
                <div class="carousel-item-content">
                    <div class="carousel-item-title">Penjualan</div>
                    <div class="carousel-item-desc">245 Posisi Tersedia</div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('gambar/beranda/Group 7.png') }}" alt="IT">
                <div class="carousel-item-content">
                    <div class="carousel-item-title">Teknologi</div>
                    <div class="carousel-item-desc">389 Posisi Tersedia</div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('gambar/beranda/Group 8.png') }}" alt="Marketing">
                <div class="carousel-item-content">
                    <div class="carousel-item-title">Marketing</div>
                    <div class="carousel-item-desc">167 Posisi Tersedia</div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('gambar/beranda/managemen.png') }}" alt="Management">
                <div class="carousel-item-content">
                    <div class="carousel-item-title">Manajemen</div>
                    <div class="carousel-item-desc">92 Posisi Tersedia</div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('gambar/beranda/marketing & communication.png') }}" alt="Communication">
                <div class="carousel-item-content">
                    <div class="carousel-item-title">Komunikasi</div>
                    <div class="carousel-item-desc">128 Posisi Tersedia</div>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="/cari-kerja" class="search-button" style="display: inline-block; text-decoration: none;">Jelajahi Lebih Banyak</a>
        </div>
    </div>
</div>

<!-- Lowongan Terbaru Section -->
<div class="section">
    <div class="section-container">
        <h2 class="section-title">Lowongan Terbaru</h2>
        <p class="section-subtitle">Posisi terbaru dari perusahaan-perusahaan terkemuka menanti Anda</p>
        
        <div class="jobs-container">
            <div class="job-card">
                <div class="job-icon">💼</div>
                <div class="job-info">
                    <div class="job-title">Senior UI/UX Designer</div>
                    <div class="job-company">DesignStudio • Remote</div>
                    <div class="job-tags">
                        <span class="tag">UX/UI</span>
                        <span class="tag">Figma</span>
                        <span class="tag">$60k - $80k</span>
                    </div>
                    <div class="job-posted">Diposting 2 jam yang lalu</div>
                </div>
                <div class="job-actions">
                    <button class="btn-detail">Lihat</button>
                    <button class="btn-apply">Lamar Sekarang</button>
                </div>
            </div>

            <div class="job-card">
                <div class="job-icon">🚀</div>
                <div class="job-info">
                    <div class="job-title">Full Stack Developer</div>
                    <div class="job-company">TechCorp Innovations • Jakarta, ID</div>
                    <div class="job-tags">
                        <span class="tag">React</span>
                        <span class="tag">Node.js</span>
                        <span class="tag">Full-time</span>
                    </div>
                    <div class="job-posted">Diposting 2 hari yang lalu</div>
                </div>
                <div class="job-actions">
                    <button class="btn-detail">Lihat</button>
                    <button class="btn-apply">Lamar Sekarang</button>
                </div>
            </div>

            <div class="job-card">
                <div class="job-icon">📊</div>
                <div class="job-info">
                    <div class="job-title">Marketing Intern</div>
                    <div class="job-company">BrightMedia Agency • Bandung, ID</div>
                    <div class="job-tags">
                        <span class="tag new">Social Media</span>
                        <span class="tag">Content</span>
                        <span class="tag">Paid</span>
                    </div>
                    <div class="job-posted">Diposting 4 hari yang lalu</div>
                </div>
                <div class="job-actions">
                    <button class="btn-detail">Lihat</button>
                    <button class="btn-apply">Lamar Sekarang</button>
                </div>
            </div>

            <div class="job-card">
                <div class="job-icon">💻</div>
                <div class="job-info">
                    <div class="job-title">Product Manager</div>
                    <div class="job-company">Enterprise Flow • Singapore</div>
                    <div class="job-tags">
                        <span class="tag">Agile</span>
                        <span class="tag">Strategy</span>
                        <span class="tag">$100k+</span>
                    </div>
                    <div class="job-posted">Diposting 6 hari yang lalu</div>
                </div>
                <div class="job-actions">
                    <button class="btn-detail">Lihat</button>
                    <button class="btn-apply">Lamar Sekarang</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Apa Kata Mereka Section -->
<div class="section">
    <div class="section-container">
        <h2 class="section-title">Apa Kata Mereka?</h2>
        <p class="section-subtitle">Kisah sukses dari para profesional yang berhasil menemukan karir impian mereka melalui HireAble.</p>
        
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-avatar"></div>
                <div class="testimonial-name">Rudi Pratama</div>
                <div class="testimonial-role">Product Manager • Jakarta</div>
                <div class="testimonial-text">Terima kasih HireAble! Saya berhasil mendapatkan pekerjaan impian dengan gaji yang jauh lebih baik. Proses seleksi sangat transparan dan cepat.</div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-avatar"></div>
                <div class="testimonial-name">Sinta Wijaya</div>
                <div class="testimonial-role">UX Designer • Bandung</div>
                <div class="testimonial-text">Aplikasi HireAble membuat pencarian kerja menjadi mudah dan efisien. Rekomendasi lowongan sesuai dengan skill saya sangat membantu.</div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-avatar"></div>
                <div class="testimonial-name">Budi Hartiadi</div>
                <div class="testimonial-role">Software Engineer • Singapore</div>
                <div class="testimonial-text">Platform ini sangat user-friendly dan fitur-fiturnya lengkap. Saya merekomendasikan HireAble kepada semua teman profesional saya.</div>
            </div>
        </div>
    </div>
</div>

<!-- Mengapa HireAble Section -->
<div class="section">
    <div class="section-container">
        <h2 class="section-title">Mengapa HireAble?</h2>
        <p class="section-subtitle">Kami menyediakan solusi lengkap untuk karir profesional Anda</p>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">✓</div>
                <div class="feature-title">Verified Companies</div>
                <div class="feature-desc">Semua perusahaan telah diverifikasi untuk memastikan keamanan dan kredibilitas lowongan kerja.</div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <div class="feature-title">Fast Application</div>
                <div class="feature-desc">Proses aplikasi yang cepat dan mudah hanya dengan beberapa klik untuk melamar lowongan favorit.</div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <div class="feature-title">Smart Recommendations</div>
                <div class="feature-desc">Sistem rekomendasi AI yang cerdas memberikan lowongan pekerjaan yang sesuai dengan profil Anda.</div>
            </div>
        </div>
    </div>
</div>

<!-- Mengapa HireAble Section -->
<div class="mengapa-hireable">
    <div class="mengapa-hireable-container">
        <div class="mengapa-hireable-content">
            <h2 class="mengapa-hireable-title">Mengapa HireAble?</h2>
            
            <div class="mengapa-hireable-features">
                <div class="mengapa-hireable-item">
                    <div class="mengapa-hireable-icon">✓</div>
                    <div class="mengapa-hireable-text">
                        <h4>Verified Companies</h4>
                        <p>Semua perusahaan telah diverifikasi untuk memastikan keamanan dan kredibilitas lowongan kerja.</p>
                    </div>
                </div>

                <div class="mengapa-hireable-item">
                    <div class="mengapa-hireable-icon">✓</div>
                    <div class="mengapa-hireable-text">
                        <h4>Fast Application</h4>
                        <p>Proses aplikasi yang cepat dan mudah hanya dengan beberapa klik untuk melamar lowongan.</p>
                    </div>
                </div>

                <div class="mengapa-hireable-item">
                    <div class="mengapa-hireable-icon">✓</div>
                    <div class="mengapa-hireable-text">
                        <h4>Smart Recommendations</h4>
                        <p>Sistem rekomendasi AI yang cerdas memberikan lowongan pekerjaan yang sesuai dengan profil Anda.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mengapa-hireable-image">
            <img src="{{ asset('gambar/beranda/Happy Professional.png') }}" alt="HireAble Features">
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="cta-section">
    <h2 class="cta-title">Siap Memulai Karir Impianmu?</h2>
    <p class="cta-subtitle">Bergabunglah dengan ribuan profesional yang telah menemukan pekerjaan impian mereka melalui HireAble.</p>
    <a href="/daftar" class="cta-button">Daftar Sekarang</a>
</div>
@endsection

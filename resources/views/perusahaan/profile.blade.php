@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="company-hero" style="background-image: url('{{ asset('gambar/profile_perusahaan/kota.png') }}');">
    <div class="company-hero-overlay"></div>
    <div class="company-header">
        <div class="company-logo">
            <img src="{{ asset('gambar/profile_perusahaan/nova.png') }}" alt="TechNova Logo">
        </div>
        <div class="company-title-section">
            <div class="company-title-row">
                <h1>TechNova Solutions</h1>
                <span class="badge-verified">VERIFIED</span>
            </div>
            <div class="company-meta">
                <span><img src="{{ asset('gambar/profile_perusahaan/code.png') }}" alt="tech"> Technology</span>
                <span><img src="{{ asset('gambar/profile_perusahaan/bumi.png') }}" alt="location"> Buduran, Sidoarjo</span>
                <span>@ technova.io</span>
            </div>
        </div>
        <div class="company-actions">
            <button class="btn-follow">Follow</button>
            <button class="btn-see-jobs">See Jobs</button>
        </div>
    </div>
</div>

<div class="company-container">
    <div class="company-grid">
        <!-- Left Column -->
        <div class="company-left">
            <!-- Tentang -->
            <section class="company-section">
                <h2>Tentang</h2>
                <p>TechNova Solutions is at the forefront of cloud infrastructure and AI integration. Founded with a vision to simplify complex technological ecosystems, we provide scalable solutions for Fortune 500 companies and agile startups alike.</p>
                <p>Our history is rooted in a culture of continuous learning and disruptive innovation. From our humble beginnings as a small research lab in Silicon Valley to becoming a global leader in SaaS infrastructure, we remain committed to our core values: Integrity, Scalability, and Human-Centric Design. We believe that technology should empower people, not replace them.</p>
            </section>

            <!-- Culture & Benefits -->
            <section class="company-section">
                <h2>Culture & Benefits</h2>
                <div class="benefits-grid">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <img src="{{ asset('gambar/profile_perusahaan/code.png') }}" alt="flexible">
                        </div>
                        <h4>Flexible Work</h4>
                        <p>Hybrid & remote-first options for all teams.</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <img src="{{ asset('gambar/profile_perusahaan/perisai.png') }}" alt="health">
                        </div>
                        <h4>Premium Health</h4>
                        <p>Full medical, dental, and vision coverage.</p>
                    </div>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <img src="{{ asset('gambar/profile_perusahaan/hat.png') }}" alt="learning">
                        </div>
                        <h4>L&D Budget</h4>
                        <p>$3,000 annual professional development fund.</p>
                    </div>
                </div>
            </section>

            <!-- Lowongan Kerja Aktif -->
            <section class="company-section">
                <div class="section-header">
                    <h2>Lowongan Kerja Aktif</h2>
                    <a href="#" class="view-all">View all 12 roles</a>
                </div>
                <div class="jobs-list">
                    <div class="job-item">
                        <div class="job-item-icon">
                            <img src="{{ asset('gambar/profile_perusahaan/code.png') }}" alt="dev">
                        </div>
                        <div class="job-item-content">
                            <h4>Senior Software Engineer</h4>
                            <span class="job-type">Full-time</span>
                            <span class="job-salary">$150k - $275k</span>
                        </div>
                        <button class="btn-apply">Apply</button>
                    </div>
                    <div class="job-item">
                        <div class="job-item-icon">
                            <img src="{{ asset('gambar/profile_perusahaan/kuas.png') }}" alt="design">
                        </div>
                        <div class="job-item-content">
                            <h4>Product Designer</h4>
                            <span class="job-type">Hybrid</span>
                            <span class="job-salary">$140k - $180k</span>
                        </div>
                        <button class="btn-apply">Apply</button>
                    </div>
                </div>
            </section>

            <!-- Foto Kantor -->
            <section class="company-section">
                <h2>Foto Kantor</h2>
                <div class="office-gallery">
                    <img src="{{ asset('gambar/profile_perusahaan/kantor.png') }}" alt="Office Main" class="gallery-main">
                    <div class="gallery-side">
                        <img src="{{ asset('gambar/profile_perusahaan/kantor.png') }}" alt="Office 2">
                        <img src="{{ asset('gambar/profile_perusahaan/kantor.png') }}" alt="Office 3">
                    </div>
                </div>
            </section>
        </div>

        <!-- Right Column (Sidebar) -->
        <div class="company-right">
            <!-- Info Perusahaan -->
            <section class="company-info-card">
                <h3>Info Perusahaan</h3>
                <div class="info-row">
                    <span class="info-label">Didirikan</span>
                    <span class="info-value">2016</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Besar</span>
                    <span class="info-value">201-500 Employees</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Pendapatan</span>
                    <span class="info-value">$50M - $100M</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Industri</span>
                    <span class="info-value">Tech / SaaS</span>
                </div>
            </section>

            <!-- Connect With Us -->
            <section class="company-info-card">
                <h3>Connect With Us</h3>
                <div class="social-links">
                    <a href="#" class="social-link">
                        <img src="{{ asset('gambar/profile_perusahaan/Link.png') }}" alt="website">
                    </a>
                    <a href="#" class="social-link">
                        <img src="{{ asset('gambar/profile_perusahaan/Link.png') }}" alt="linkedin">
                    </a>
                    <a href="#" class="social-link">
                        <img src="{{ asset('gambar/profile_perusahaan/Link.png') }}" alt="twitter">
                    </a>
                </div>
            </section>

            <!-- Location -->
            <section class="company-info-card">
                <h3>Location</h3>
                <div class="location-map">
                    <img src="{{ asset('gambar/profile_perusahaan/map.png') }}" alt="Location Map">
                </div>
                <p class="location-address">101 California St,<br>San Francisco, CA 94111</p>
            </section>

            <!-- Don't miss a role -->
            <section class="company-info-card cta-card">
                <h3>Don't miss a role</h3>
                <p>Get notified the moment TechNova Solutions posts a new opening.</p>
                <button class="btn-alert">Alert Me</button>
            </section>
        </div>
    </div>
</div>

@endsection

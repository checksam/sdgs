<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'HireAble') }} - Cari Kerja Impianmu</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="/" class="navbar-logo">
                <span class="logo-text">HireAble</span>
            </a>
            <ul class="nav-menu">
                <li><a href="/cari-kerja" class="nav-link">Cari Kerja</a></li>
                <li><a href="/perusahaan" class="nav-link">Perusahaan</a></li>
                <li><a href="#" class="nav-link">Tips Karir</a></li>
                <li><a href="#" class="nav-link">Pelatihan</a></li>
            </ul>
            <a href="/login" class="btn-masuk">Masuk</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h4>HireAble</h4>
                <p>Temukan pekerjaan impianmu dengan mudah dan cepat bersama HireAble platform terpercaya.</p>
                <div class="footer-contact">
                    <p>📞 0812-8030-0305</p>
                    <p>✉️ info@hireable.com</p>
                </div>
            </div>
            <div class="footer-column">
                <h4>Tentang Kami</h4>
                <ul>
                    <li><a href="#">Tentang HireAble</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Customer Support</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Social Media</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">LinkedIn</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Kontak Kami</h4>
                <ul>
                    <li><a href="#">0812-8030-0305</a></li>
                    <li><a href="#">info@hireable.com</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 HireAble. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

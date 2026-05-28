@extends('layouts.app')

@section('content')
<div class="section">
    <div class="section-container">
        <h2 class="section-title">Find your next great workplace</h2>
        <p class="section-subtitle">Temukan perusahaan yang selaras dengan nilai-nilai, tujuan karir, dan gaya hidup Anda. Saring ribuan perusahaan terkemuka.</p>
        
        <div class="filter-container">
            <!-- Filter Sidebar -->
            <div class="filter-sidebar">
                <div class="filter-group">
                    <h3 class="filter-title">Industry</h3>
                    <select style="width: 100%; padding: 8px; border: 1px solid #DDD; border-radius: 6px; background-color: #FFFFFF;">
                        <option>All Industries</option>
                        <option>Technology</option>
                        <option>Finance</option>
                        <option>Healthcare</option>
                        <option>Education</option>
                    </select>
                </div>

                <div class="filter-group">
                    <h3 class="filter-title">Location</h3>
                    <input type="text" placeholder="City or Remote" class="search-input">
                </div>

                <div class="filter-group">
                    <h3 class="filter-title">Company Size</h3>
                    <div class="filter-item">
                        <input type="checkbox" id="size1">
                        <label for="size1">1 - 50 employees</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="size2">
                        <label for="size2">51 - 200 employees</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="size3" checked>
                        <label for="size3">201 - 500 employees</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="size4">
                        <label for="size4">500+ employees</label>
                    </div>
                </div>

                <button class="filter-submit">Reset Filters</button>
            </div>

            <!-- Companies Grid -->
            <div class="filter-content">
                <div class="search-bar-filter">
                    <input type="text" placeholder="Search by company name, industry, or keywords...">
                    <button>Search</button>
                </div>

                <div class="sort-container">
                    <span>Showing 245 Companies</span>
                    <div>
                        <label>Sort by:</label>
                        <select>
                            <option>Most Active Jobs</option>
                            <option>Recently Updated</option>
                            <option>Rating: High to Low</option>
                            <option>Company Name</option>
                        </select>
                    </div>
                </div>

                <div class="companies-grid">
                    <div class="company-card">
                        <div class="company-header">
                            <div class="company-logo">🔷</div>
                            <span class="company-badge">12 Active Jobs</span>
                        </div>
                        <h3 class="company-name">TechNova Solutions</h3>
                        <p class="company-location">
                            🏢 Technology • 🌍 San Francisco, CA
                        </p>
                        <p class="company-desc">Pioneering the next generation of cloud infrastructure and AI-driven automation for enterprises worldwide.</p>
                        <div class="company-tags">
                            <span class="tag">Hybrid</span>
                            <span class="tag">Fortune 500</span>
                            <span class="tag">Series D</span>
                        </div>
                        <a href="#" class="company-action">View Company Profile</a>
                    </div>

                    <div class="company-card">
                        <div class="company-header">
                            <div class="company-logo">🟩</div>
                            <span class="company-badge">4 Active Jobs</span>
                        </div>
                        <h3 class="company-name">GreenHorizon Design</h3>
                        <p class="company-location">
                            🏢 Creative Arts • 🌍 Austin, TX
                        </p>
                        <p class="company-desc">Sustainable urban planning and eco-friendly architectural solutions for modern cities and communities.</p>
                        <div class="company-tags">
                            <span class="tag">Sustainable</span>
                            <span class="tag">Remote-friendly</span>
                        </div>
                        <a href="#" class="company-action">View Company Profile</a>
                    </div>

                    <div class="company-card">
                        <div class="company-header">
                            <div class="company-logo">💰</div>
                            <span class="company-badge">8 Active Jobs</span>
                        </div>
                        <h3 class="company-name">FinGuard Systems</h3>
                        <p class="company-location">
                            🏢 Finance • 🌍 New york, NY
                        </p>
                        <p class="company-desc">Leading the way in secure payment processing and blockchain-based asset management for fintech companies.</p>
                        <div class="company-tags">
                            <span class="tag">FinTech</span>
                            <span class="tag">Global</span>
                        </div>
                        <a href="#" class="company-action">View Company Profile</a>
                    </div>

                    <div class="company-card">
                        <div class="company-header">
                            <div class="company-logo">🎓</div>
                            <span class="company-badge">6 Active Jobs</span>
                        </div>
                        <h3 class="company-name">EduPlus Global</h3>
                        <p class="company-location">
                            🏢 Education • 🌍 Remote
                        </p>
                        <p class="company-desc">Revolutionizing online education through interactive VR classrooms and personalized AI-powered learning experiences.</p>
                        <div class="company-tags">
                            <span class="tag">EdTech</span>
                            <span class="tag">Remote Only</span>
                        </div>
                        <a href="#" class="company-action">View Company Profile</a>
                    </div>
                </div>

                <div class="pagination">
                    <a href="#">←</a>
                    <span class="active">1</span>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">12</a>
                    <a href="#">→</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hire Faster Section -->
<div style="position: fixed; bottom: 60px; left: 20px; width: 200px; background: linear-gradient(135deg, #6366F1 0%, #8B5CF6 100%); color: #FFFFFF; padding: 20px; border-radius: 12px; z-index: 50;">
    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 16px;">
        <span style="font-size: 20px;">🚀</span>
        <span style="font-weight: 700;">Hire Faster</span>
    </div>
    <p style="font-size: 12px; margin-bottom: 16px;">Complete your profile to get recommendations.</p>
    <a href="/daftar" style="display: block; width: 100%; padding: 8px; background-color: #FFFFFF; color: #6366F1; border: none; border-radius: 6px; font-weight: 600; cursor: pointer; text-align: center; text-decoration: none;">Complete Profile →</a>
</div>
@endsection

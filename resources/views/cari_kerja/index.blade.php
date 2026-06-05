@extends('layouts.app')

@section('content')
<div class="section">
    <div class="section-container">
        <h2 class="section-title">Cari Kerja</h2>
        <p class="section-subtitle">Temukan pekerjaan yang sesuai dengan skill dan pengalaman Anda</p>
        
        <div class="filter-container">
            <!-- Filter Sidebar -->
            <div class="filter-sidebar">
                <div class="filter-group">
                    <h3 class="filter-title">Tipe Pekerjaan</h3>
                    <div class="filter-item">
                        <input type="checkbox" id="fulltime" checked>
                        <label for="fulltime">Full-time</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="remote">
                        <label for="remote">Remote</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="contract">
                        <label for="contract">Contract</label>
                    </div>
                </div>

                <div class="filter-group">
                    <h3 class="filter-title">Kategori Pekerjaan</h3>
                    <div class="filter-item">
                        <input type="checkbox" id="tech">
                        <label for="tech">Teknologi & IT</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="design" checked>
                        <label for="design">Desain & Kreatif</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="marketing">
                        <label for="marketing">Marketing & Sales</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="finance">
                        <label for="finance">Keuangan & Akuntansi</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="admin">
                        <label for="admin">Administrasi</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="education">
                        <label for="education">Pendidikan</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="teknik">
                        <label for="teknik">Teknik & Industri</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="media">
                        <label for="media">Media & Komunikasi</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="hospitality">
                        <label for="hospitality">Hospitality & Perhotelan</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="retail">
                        <label for="retail">Retail & Customer Service</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="logistik">
                        <label for="logistik">Logistik & Transportasi</label>
                    </div>
                    <div class="filter-item">
                        <input type="checkbox" id="hukum">
                        <label for="hukum">Hukum & HR</label>
                    </div>
                </div>

                <div class="filter-group">
                    <h3 class="filter-title">Kisaran Gaji</h3>
                    <div class="filter-range">
                        <input type="text" placeholder="$50k" style="width: 50%;">
                        <span>-</span>
                        <input type="text" placeholder="$100k+" style="width: 50%;">
                    </div>
                </div>

                <div class="filter-group">
                    <h3 class="filter-title">Lokasi</h3>
                    <input type="text" placeholder="City or Country" class="search-input">
                </div>

                <button class="filter-submit">Reset Filter</button>
            </div>

            <!-- Job Listings -->
            <div class="filter-content">
                <div class="search-bar-filter">
                    <input type="text" placeholder="Search for 'Product Manager' or 'Remote'...">
                    <button>Cari Kerja</button>
                </div>

                <div class="sort-container">
                    <span>Menampilkan 1,294 pekerjaan</span>
                    <div>
                        <label>Sort by:</label>
                        <select>
                            <option>Newest First</option>
                            <option>Most Relevant</option>
                            <option>Salary: High to Low</option>
                            <option>Salary: Low to High</option>
                        </select>
                    </div>
                </div>

                <div class="jobs-container">
                    <div class="job-card">
                        <div class="job-icon">🎨</div>
                        <div class="job-info">
                            <div class="job-title">Senior UI/UX Designer</div>
                            <div class="job-company">DesignStudio Studio • Remote</div>
                            <div class="job-tags">
                                <span class="tag">UX/UI</span>
                                <span class="tag">Figma</span>
                                <span class="tag">$60k - $80k</span>
                            </div>
                            <div class="job-posted">Diposting 2 jam yang lalu</div>
                        </div>
                        <div class="job-actions">
                            <button class="btn-detail">Lihat</button>
                            <button class="btn-apply" data-job="Senior UI/UX Designer">Lamar Sekarang</button>
                        </div>
                    </div>

                    <div class="job-card">
                        <div class="job-icon">⚙️</div>
                        <div class="job-info">
                            <div class="job-title">Full Stack Developer</div>
                            <div class="job-company">Enterprise Tech Innovations • Jakarta, ID</div>
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
                        <div class="job-icon">📱</div>
                        <div class="job-info">
                            <div class="job-title">Marketing Intern</div>
                            <div class="job-company">BrightMedia Agency • Bandung, ID</div>
                            <div class="job-tags">
                                <span class="tag new">Baru Saja</span>
                                <span class="tag">Social Media</span>
                                <span class="tag">Content</span>
                            </div>
                            <div class="job-posted">Diposting 4 hari yang lalu</div>
                        </div>
                        <div class="job-actions">
                            <button class="btn-detail">Lihat</button>
                            <button class="btn-apply">Lamar Sekarang</button>
                        </div>
                    </div>

                    <div class="job-card">
                        <div class="job-icon">💼</div>
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

<!-- Premium Feature Sidebar -->
<div style="position: fixed; bottom: 60px; left: 20px; width: 200px; background-color: #0E1E3F; color: #FFFFFF; padding: 20px; border-radius: 12px; z-index: 50;">
    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 16px;">
        <span style="font-size: 20px;">🚀</span>
        <span style="font-weight: 700;">Premium Features</span>
    </div>
    <p style="font-size: 12px; margin-bottom: 16px;">CV Booster untuk mendapatkan hasil maksimal dari job recruiters 3x lebih cepat.</p>
    <button style="width: 100%; padding: 8px; background-color: #FFFFFF; color: #0E1E3F; border: none; border-radius: 6px; font-weight: 600; cursor: pointer;">Try Free Now</button>
</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.btn-apply').forEach(function(button) {
            button.addEventListener('click', function () {
                window.location.href = '/lamar-sekarang';
            });
        });
    });
</script>
@endsection

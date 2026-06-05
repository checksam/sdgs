@extends('layouts.app')

@section('content')
<div class="section" style="padding: 60px 0;">
    <div class="section-container" style="max-width: 900px; margin: 0 auto; background: #ffffff; border-radius: 20px; box-shadow: 0 30px 60px rgba(0, 0, 0, 0.08); padding: 40px;">
        <div style="display: flex; align-items: center; gap: 18px; margin-bottom: 30px;">
            <div style="width: 72px; height: 72px; border-radius: 18px; background: #0E1E3F; display: grid; place-items: center; color: #ffffff; font-size: 30px;">📩</div>
            <div>
                <h2 style="font-size: 34px; margin-bottom: 8px; color: #0E1E3F;">Lamar Pekerjaan</h2>
                <p style="color: #4B5563; font-size: 16px; line-height: 1.6;">Silakan lengkapi informasi lamaran Anda. Tim HR akan menghubungi jika profil Anda cocok dengan lowongan.</p>
            </div>
        </div>

        <div style="display: grid; gap: 24px;">
            <div style="background: #F8FAFC; border-radius: 18px; padding: 24px;">
                <h3 style="margin-bottom: 14px; color: #111827;">Lowongan: Senior UI/UX Designer</h3>
                <p style="margin-bottom: 12px; color: #4B5563;"><strong>Perusahaan:</strong> DesignStudio Studio</p>
                <p style="margin-bottom: 12px; color: #4B5563;"><strong>Lokasi:</strong> Remote</p>
                <p style="margin-bottom: 0; color: #4B5563;"><strong>Gaji:</strong> $60k - $80k</p>
            </div>

            <form method="POST" action="#" enctype="multipart/form-data" style="display: grid; gap: 20px;">
                <div style="display: grid; gap: 12px;">
                    <label style="color: #111827; font-weight: 600;">Nama Lengkap</label>
                    <input type="text" placeholder="Masukkan nama lengkap Anda" style="width: 100%; padding: 16px; border: 1px solid #CBD5E1; border-radius: 12px; font-size: 14px;">
                </div>

                <div style="display: grid; gap: 12px;">
                    <label style="color: #111827; font-weight: 600;">Email</label>
                    <input type="email" placeholder="Masukkan email Anda" style="width: 100%; padding: 16px; border: 1px solid #CBD5E1; border-radius: 12px; font-size: 14px;">
                </div>

                <div style="display: grid; gap: 12px;">
                    <label style="color: #111827; font-weight: 600;">Nomor Telepon</label>
                    <input type="text" placeholder="Masukkan nomor telepon" style="width: 100%; padding: 16px; border: 1px solid #CBD5E1; border-radius: 12px; font-size: 14px;">
                </div>

                <div style="display: grid; gap: 12px;">
                    <label style="color: #111827; font-weight: 600;">CV Pelamar</label>
                    <input type="file" name="cv_pelamar" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" style="width: 100%; padding: 12px 14px; border: 1px solid #CBD5E1; border-radius: 12px; font-size: 14px; background: #FFFFFF;">
                </div>

                <div style="display: grid; gap: 12px;">
                    <label style="color: #111827; font-weight: 600;">Pesan Lamaran</label>
                    <textarea rows="6" placeholder="Tulis pesan singkat untuk HR" style="width: 100%; padding: 16px; border: 1px solid #CBD5E1; border-radius: 12px; font-size: 14px;"></textarea>
                </div>

                <button type="button" style="width: 220px; padding: 16px; background: #0E1E3F; color: #FFFFFF; border: none; border-radius: 14px; font-size: 16px; font-weight: 700; cursor: pointer;">Kirim Lamaran</button>
            </form>

            <div style="background: #0E1E3F; border-radius: 18px; padding: 24px; color: #FFFFFF;">
                <h3 style="margin-bottom: 14px;">Info Tambahan</h3>
                <ul style="list-style: none; padding: 0; margin: 0; display: grid; gap: 10px;">
                    <li>✅ CV Anda akan segera ditinjau oleh tim HR</li>
                    <li>✅ Pastikan data dan kontak yang dimasukkan benar</li>
                    <li>✅ Anda akan dihubungi melalui email atau telepon</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="section">
    <div class="section-container">
        <div style="max-width:560px; margin:0 auto;">
            <div class="form-content" style="padding:40px;">
                <h2 class="form-title">Verifikasi Akun</h2>
                <p class="form-subtitle">Kami telah mengirimkan kode OTP ke email Anda. Masukkan kode tersebut di bawah ini.</p>

                <div style="display:flex; gap:12px; justify-content:center; margin:22px 0 10px;">
                    <input class="otp-input" type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" autocomplete="one-time-code" aria-label="Digit 1">
                    <input class="otp-input" type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" autocomplete="one-time-code" aria-label="Digit 2">
                    <input class="otp-input" type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" autocomplete="one-time-code" aria-label="Digit 3">
                    <input class="otp-input" type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" autocomplete="one-time-code" aria-label="Digit 4">
                    <input class="otp-input" type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" autocomplete="one-time-code" aria-label="Digit 5">
                    <input class="otp-input" type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" autocomplete="one-time-code" aria-label="Digit 6">
                </div>

                <div style="display:flex; justify-content:center; gap:8px; align-items:center; margin-bottom:20px; font-size:14px; color:#6E7688;">
                    <span>Belum menerima kode?</span>
                    <button id="resend-button" type="button" style="border:none; background:none; color:#0D4FAA; font-weight:700; cursor:pointer; padding:0;">Kirim Ulang</button>
                    <span id="resend-timer">01:58</span>
                </div>

                <button id="verify-button" type="button" class="search-button" disabled>Verifikasi Sekarang</button>
                <p id="otp-message" style="margin-top:12px; text-align:center; font-size:13px; color:#D14343;"></p>
            </div>
        </div>
    </div>
</div>

<style>
    .otp-input {
        width:48px;
        height:48px;
        text-align:center;
        border-radius:12px;
        border:1px solid #E8E8E8;
        font-size:18px;
        color:#0E1E3F;
    }
    .search-button {
        width:100%;
        padding:14px 18px;
        border-radius:12px;
        background:#0D4FAA;
        color:#fff;
        border:none;
        font-weight:700;
        cursor:pointer;
        font-size:15px;
    }
    .search-button:disabled {
        background:#94B0D4;
        cursor:not-allowed;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const expectedOtp = '123456';
        const inputs = Array.from(document.querySelectorAll('.otp-input'));
        const verifyButton = document.getElementById('verify-button');
        const otpMessage = document.getElementById('otp-message');
        const resendButton = document.getElementById('resend-button');
        const resendTimer = document.getElementById('resend-timer');
        let countdown = 118;
        let timerId;

        function updateVerifyState() {
            const code = inputs.map(input => input.value.trim()).join('');
            const allFilled = code.length === inputs.length;
            verifyButton.disabled = !allFilled;
            otpMessage.textContent = '';
            return code;
        }

        function startTimer() {
            resendButton.disabled = true;
            resendButton.style.opacity = '0.5';
            timerId = setInterval(() => {
                if (countdown <= 0) {
                    clearInterval(timerId);
                    resendTimer.textContent = '';
                    resendButton.disabled = false;
                    resendButton.style.opacity = '1';
                    return;
                }
                const minutes = String(Math.floor(countdown / 60)).padStart(2, '0');
                const seconds = String(countdown % 60).padStart(2, '0');
                resendTimer.textContent = `${minutes}:${seconds}`;
                countdown -= 1;
            }, 1000);
        }

        inputs.forEach((input, index) => {
            input.addEventListener('input', (event) => {
                const value = event.target.value.replace(/[^0-9]/g, '');
                event.target.value = value;
                if (value && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
                updateVerifyState();
            });

            input.addEventListener('keydown', (event) => {
                if (event.key === 'Backspace' && !event.target.value && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });

        verifyButton.addEventListener('click', () => {
            const code = inputs.map(input => input.value.trim()).join('');
            if (code === expectedOtp) {
                window.location.href = '/password-baru';
            } else {
                otpMessage.textContent = 'Kode OTP salah. Silakan coba lagi.';
            }
        });

        resendButton.addEventListener('click', () => {
            countdown = 118;
            startTimer();
            otpMessage.textContent = 'Kode baru telah dikirim. Periksa email Anda.';
        });

        startTimer();
    });
</script>
@endsection

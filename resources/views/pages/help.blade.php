@extends('layouts.home')
@push('styles')
    <style>
        .header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("assets/job.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #fff;
        }

        .marketplace-hero {
            min-height: 25vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 2rem;
        }

        .marketplace-hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .marketplace-hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.95;
        }

        .btn-primary {
            background-color: #e9a319;
            color: white;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #c48716;
        }
    </style>
@endpush
@section('content')
    <header class="header">
        @include('layouts.nav')
        <div class="marketplace-hero">
            <h1>Pusat Bantuan</h1>
            <p>Kami siap membantu Anda kapan saja.</p>
        </div>
    </header>
    <section class="bantuan-section">
        <h2>Yang Sering Ditanyakan</h2>
        <p>Temukan jawaban cepat untuk pertanyaan Anda</p>
        <div class="bantuan__grid">
            <div class="bantuan__card">
                <div class="bantuan__header">
                    <h4>Apakah data dan transaksi saya aman di Protigamas?</h4>
                    <span><i class="ri-arrow-down-s-line"></i></span>
                </div>
                <div class="bantuan__description">
                    Ya, semua data pengguna dilindungi dengan sistem enkripsi modern. Kami juga menggunakan sistem keamanan
                    berlapis untuk menjamin privasi dan keamanan transaksi Anda di semua layanan Protigamas.
                </div>
            </div>

            <div class="bantuan__card">
                <div class="bantuan__header">
                    <h4>Bagaimana cara mendaftar di aplikasi Protigamas?</h4>
                    <span><i class="ri-arrow-down-s-line"></i></span>
                </div>
                <div class="bantuan__description">
                    Anda cukup mengakses situs web kami, lalu klik tombol “Daftar”. Isi data diri Anda dengan benar,
                    verifikasi nomor HP, dan akun Anda akan segera aktif untuk digunakan.
                </div>
            </div>

            <div class="bantuan__card">
                <div class="bantuan__header">
                    <h4>Apa saja fitur unggulan yang tersedia?</h4>
                    <span><i class="ri-arrow-down-s-line"></i></span>
                </div>
                <div class="bantuan__description">
                    Protigamas menawarkan fitur seperti Smart Node.Pro untuk menghasilkan reward digital, Smart PI Mall
                    untuk belanja dan jualan online, serta Smart Vakansi untuk paket liburan lengkap. Semua dalam satu
                    aplikasi.
                </div>
            </div>

            <div class="bantuan__card">
                <div class="bantuan__header">
                    <h4>Apa itu program Member Get Member dan bagaimana levelnya?</h4>
                    <span><i class="ri-arrow-down-s-line"></i></span>
                </div>
                <div class="bantuan__description">
                    Program Member Get Member adalah sistem referral berjenjang. Semakin banyak Anda mengajak orang
                    bergabung, level Anda akan meningkat (Starter, Pro, Leader, Executive). Semakin tinggi level, semakin
                    besar bonus yang Anda dapatkan.
                </div>
            </div>
        </div>
        </div>
        </div>

        <div class="bantuan__contact">
            <h3>Hubungi Kami</h3>
            <div class="bantuan__contact__box">

                <a href="#" class="bantuan__contact__button">
                    <i class="ri-headphone-line"></i>
                    <div>
                        <strong>Layanan Online</strong>
                        <p>Layanan 24/7 untuk Pelanggan</p>
                    </div>
                </a>

                <div class="bantuan__divider"></div>

                <a href="#" class="bantuan__contact__button">
                    <i class="ri-edit-line"></i>
                    <div>
                        <strong>Survei</strong>
                        <p>Tinggalkan Feedback</p>
                    </div>
                </a>

            </div>
        </div>
    </section>
@endsection

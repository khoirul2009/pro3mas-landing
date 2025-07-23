@extends('layouts.home')
@push('styles')
    <style>
        .header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("assets/about-2.jpg");
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

        .testimoni__grid,
        .paket__grid {
            display: grid;
            gap: 2rem;
            margin-top: 2rem;
        }

        .testimoni__card,
        .paket__card {
            background: #fff;
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .testimoni__card p {
            font-style: italic;
            color: #444;
        }

        .testimoni__card h4 {
            margin-top: 1rem;
            color: #e9a319;
        }

        .paket__card img {
            border-radius: 8px;
            margin-bottom: 1rem;
        }
    </style>
@endpush
@section('content')
    <header class="header">
        @include('layouts.nav')

        <!-- Hero Section Menyatu dengan Header -->
        <div class="marketplace-hero">
            <h1>Smart Vakansi – Solusi Cerdas untuk Ibadah & Wisata</h1>
            <p>Nikmati pengalaman perjalanan spiritual dan liburan yang mudah, nyaman, dan terpercaya bersama Smart Vakansi.
            </p>
        </div>
    </header>

    <section class="features-vakansi">
        <div class="features-vakansi-sub">
            <div class="feature-card-vakansi">
                <i class="ri-shield-star-line"></i>
                <h3>Lebih Aman & Terpercaya</h3>
                <p>Bekerja sama dengan biro perjalanan bersertifikat Kemenag RI dan layanan terbaik di kelasnya.</p>
            </div>
            <div class="feature-card-vakansi">
                <i class="ri-group-line"></i>
                <h3>Komunitas Aktif</h3>
                <p>Forum jamaah & alumni yang aktif berbagi pengalaman dan tips perjalanan.</p>
            </div>
            <div class="feature-card-vakansi">
                <i class="ri-money-dollar-circle-line"></i>
                <h3>Harga Transparan</h3>
                <p>Tanpa biaya tersembunyi. Skema syariah dengan cicilan fleksibel.</p>
            </div>
        </div>
    </section>


    <section class="section__container client__container" id="client">
        <h2 class="section__header">Apa Kata Jamaah & Pelanggan Kami</h2>
        <p
            style="max-width: 900px; margin: auto; color: #6b7280; font-size: 1rem; line-height: 1.8; margin-bottom: 4rem; text-align: center;">
            Lebih dari sekadar perjalanan—mereka menemukan makna, kenyamanan, dan pengalaman tak terlupakan bersama Smart
            Vakansi.
        </p>
        <div class="swiper client-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="client__box">
                        <img src="assets/client-a.png" alt="client" class="client__photo" />
                        <div class="client__info">
                            <h4>Ahmad Rifai</h4>
                            <p class="client__role">Peserta Umrah Ramadhan</p>
                            <p class="client__quote">
                                “Pengalaman umrah yang sangat tertata rapi dan profesional. Saya merasa sangat aman dan
                                nyaman sepanjang perjalanan.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client__box">
                        <img src="assets/client-s.png" alt="client" class="client__photo" />
                        <div class="client__info">
                            <h4>Siti Nurjanah</h4>
                            <p class="client__role">Wisatawan Halal Trip</p>
                            <p class="client__quote">
                                “Tim Smart Vakansi benar-benar mendampingi kami dari awal sampai akhir. Terima kasih atas
                                pelayanan yang luar biasa.”
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan slide lain di sini -->
            </div>

            <!-- Navigasi -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="cta-section">
        <h2>Siap Memulai Perjalanan Impian Anda?</h2>
        <p>Ribuan jamaah dan wisatawan telah mempercayai Smart Vakansi sebagai mitra perjalanan mereka.</p>
        <a href="https://protigamas.id" target="_blank">
            <button class="btn-primary">Konsultasi Gratis Sekarang</button>
        </a>
    </section>
@endsection

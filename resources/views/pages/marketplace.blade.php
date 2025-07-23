@extends('layouts.home')
@push('styles')
    <style>
        .header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("assets/invest.jpg");
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
    <!-- Hero Section Menyatu dengan Header -->
    <header class="header">
        @include('layouts.nav')
        <div class="marketplace-hero">
            <h1>Smart PI Mall – Marketplace Terintegrasi</h1>
            <p>Solusi belanja dan berjualan yang inovatif untuk UMKM, pelaku usaha, dan konsumen digital.</p>
        </div>
    </header>
    <section class="mgm-section" id="mgm">
        <div class="section__container mgm__container">
            <h2 class="mgm__title">Program Member Get Member</h2>
            <p class="mgm__subtitle">
                Raih <strong>komisi berjenjang</strong> setiap kali Anda mengajak orang bergabung. Semakin luas jaringan
                Anda, semakin besar potensi keuntungannya!
            </p>

            <div class="mgm__chain">
                <div class="mgm__level level-1">
                    <div class="mgm__card tilt">
                        <div class="mgm__icon">🏅</div>
                        <h3>Anda</h3>
                        <p>Mendapat komisi saat mengajak orang pertama</p>
                    </div>
                </div>

                <div class="mgm__arrow">⬇</div>

                <div class="mgm__level level-2">
                    <div class="mgm__card tilt">
                        <div class="mgm__icon">👤</div>
                        <h3>Orang yang Anda Ajak</h3>
                        <p>Bertransaksi dan mengajak orang lain</p>
                    </div>
                </div>

                <div class="mgm__arrow">⬇</div>

                <div class="mgm__level level-3">
                    <div class="mgm__card tilt">
                        <div class="mgm__icon">👥</div>
                        <h3>Jaringan Berlanjut</h3>
                        <p>Anda tetap mendapat bonus dari generasi berikutnya</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="cta-section">
        <h2>Mulai Perjalanan Usahamu Sekarang</h2>
        <p>Bergabunglah bersama ribuan pelaku bisnis yang telah tumbuh bersama Smart PI Mall.</p>
        <a href="https://protigamas.id" target="_blank">
            <button class="btn-primary">Kunjungi Marketplace</button>
        </a>
    </section>
@endsection

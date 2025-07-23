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
    <!-- Hero Section Menyatu dengan Header -->
    <header class="header">
        @include('layouts.nav')
        <div class="marketplace-hero">
            <h1>Tanggung Jawab</h1>
            <p>Kami mengutamakan kepercayaan dan transparansi dalam setiap layanan.</p>
        </div>
    </header>

    <section class="responsibility-section">
        <div class="responsibility-wrapper">
            <h2 class="responsibility-title">Tanggung Jawab Kami</h2>
            <p class="responsibility-subtitle">Menciptakan platform yang aman, adil, dan penuh kepercayaan.</p>

            <div class="responsibility-grid">
                <div class="responsibility-card">
                    <i class="ri-shield-check-line"></i>
                    <h3>Keamanan Data</h3>
                    <p>Kami melindungi informasi Anda dengan sistem enkripsi dan standar keamanan terkini.</p>
                </div>
                <div class="responsibility-card">
                    <i class="ri-contacts-line"></i>
                    <h3>Etika Layanan</h3>
                    <p>Kami memastikan semua interaksi berlangsung secara adil, sopan, dan profesional.</p>
                </div>
                <div class="responsibility-card">
                    <i class="ri-eye-line"></i>
                    <h3>Transparansi Penuh</h3>
                    <p>Semua biaya dan kebijakan kami dijelaskan secara jelas tanpa ada biaya tersembunyi.</p>
                </div>
                <div class="responsibility-card">
                    <i class="ri-customer-service-2-line"></i>
                    <h3>Dukungan Responsif</h3>
                    <p>Tim kami selalu siap membantu dengan cepat dan empati dalam setiap kondisi.</p>
                </div>
            </div>

            <div class="responsibility-cta">
                <a href="pusat-bantuan.html" class="btn-primary">Lihat Pusat Bantuan</a>
            </div>
        </div>
    </section>
@endsection

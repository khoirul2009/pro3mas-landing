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
            <h1>Hubungan Investor</h1>
            <p>Mari tumbuh bersama dalam ekosistem digital yang kami bangun.</p>
        </div>
    </header>

    <section class="investor-section">
        <h2>Visi & Misi Kami</h2>
        <div class="visimisi-grid">
            <div class="visimisi-box">
                <h3>Visi</h3>
                <p>Menjadi pelopor ekosistem digital yang menyatukan berbagai layanan penting dalam kehidupan masyarakat
                    Indonesia melalui teknologi yang inklusif dan adaptif.</p>
            </div>
            <div class="visimisi-box">
                <h3>Misi</h3>
                <p>Mengembangkan platform teknologi yang terintegrasi, mudah diakses, serta memberdayakan mitra dan konsumen
                    untuk tumbuh bersama secara berkelanjutan.</p>
            </div>
        </div>

    </section>

    <section class="benefit-section">
        <h2>Mengapa Investasi di Protigamas?</h2>
        <div class="benefit-grid">
            <div class="benefit-box">
                <h3>Ekspansi Cepat</h3>
                <p>Kami sedang berkembang ke berbagai kota besar dan memperluas cakupan layanan digital kami di seluruh
                    Indonesia.</p>
            </div>
            <div class="benefit-box">
                <h3>Model Bisnis Berkelanjutan</h3>
                <p>Kami menggabungkan marketplace, layanan teknologi, dan kemitraan strategis untuk pertumbuhan jangka
                    panjang.</p>
            </div>
            <div class="benefit-box">
                <h3>ROI Menarik</h3>
                <p>Dengan potensi pertumbuhan tinggi, investor memiliki peluang mendapatkan imbal hasil yang sangat
                    kompetitif.</p>
            </div>
            <div class="benefit-box">
                <h3>Transparansi & Laporan Rutin</h3>
                <p>Kami menyediakan laporan perkembangan dan keuangan secara berkala agar Anda tetap yakin dan terinformasi.
                </p>
            </div>
            <div class="benefit-box">
                <h3>Tim Profesional</h3>
                <p>Didukung oleh tim berpengalaman di bidang teknologi, bisnis, dan pengembangan produk digital.</p>
            </div>
            <div class="benefit-box">
                <h3>Ekosistem yang Solid</h3>
                <p>Kami membangun jaringan mitra dan pengguna yang aktif, saling terhubung dalam satu sistem teknologi
                    pintar.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 2rem;">
            <button class="btn-primary"
                onclick="window.location.href='https://wa.me/628815916464?text=Halo%20saya%20tertarik%20investasi%20di%20Protigamas'">
                <i class="ri-whatsapp-line" style="margin-right: 8px;"></i> Hubungi Tim Investasi Kami
            </button>
        </div>

    </section>
@endsection

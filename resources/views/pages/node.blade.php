 @extends('layouts.home')
 @push('styles')
     <style>
         .header {
             background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("assets/mining.jpg");
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
             <h1>Smart Node.Pro - Mining Cerdas, Aman, dan Terbuka</h1>
             <p>Dapatkan passive income dengan sistem transparan dan teknologi terdesentralisasi..</p>
         </div>
     </header>

     <section class="node-benefit">
         <div class="section__container">
             <h2 class="animated-heading">Miliki <span>Smart Node.Pro</span>, Dapatkan Passive Income Tanpa Batas</h2>
             <p class="animated-desc">
                 Bergabunglah dalam revolusi teknologi dengan Smart Node.Pro—aset digital masa depan yang bekerja untuk
                 Anda. Nikmati pendapatan pasif setiap bulan hingga ratusan juta bahkan miliaran rupiah, tanpa harus bekerja
                 ekstra. Cukup aktifkan node Anda, dan biarkan sistem kami menghasilkan untuk Anda.
             </p>
         </div>
     </section>

     <section class="node-packages">
         <div class="section__container">
             <h2>Pilih Paket Smart Node Sesuai Potensi Anda</h2>

             <div class="package-grid">
                 @foreach ($products as $product)
                     <div class="package-card">
                         <h3>{{ $product->title }}</h3>
                         <p class="price">Rp {{ number_format($product->price, 2) }}</p>
                         <div>
                             {!! $product->description !!}
                         </div>
                     </div>
                     {{-- <div class="package-card">
                         <h3>Paket Pro</h3>
                         <p class="price">Rp 25.000.000</p>
                         <ul>
                             <li>Akses 5 Node</li>
                             <li>Estimasi income hingga Rp 30 juta/bulan</li>
                             <li>Prioritas dukungan & laporan bulanan</li>
                         </ul>
                     </div>
                     <div class="package-card">
                         <h3>Paket Ultimate</h3>
                         <p class="price">Rp 100.000.000</p>
                         <ul>
                             <li>Akses 20 Node</li>
                             <li>Potensi income Rp 100 juta – 1M/bulan</li>
                             <li>Free konsultasi bisnis & benefit eksklusif</li>
                         </ul>
                     </div> --}}
                 @endforeach
             </div>
         </div>
     </section>
 @endsection

@extends('layouts.home')

@section('content')
    <header class="header">
        @include('layouts.nav')
        <div class="section__container header__container" id="home">
            <p>Together We Make Future Better</p>
            <h1>Semua Bisa Dalam Satu Aplikasi</h1>
            <div class="header__flex">
                <div class="header__card">
                    <span><i class="ri-stackshare-line"></i></span>
                    <div>
                        <h5>Node Center</h5>
                        <h4>Smart PI Node</h4>
                    </div>
                </div>
                <div class="header__card">
                    <span><i class="ri-building-fill"></i></span>
                    <div>
                        <h5>Tour & Travel</h5>
                        <h4>Smart Vakansi</h4>
                    </div>
                </div>
                <div class="header__card">
                    <span><i class="ri-store-2-fill"></i></span>
                    <div>
                        <h5>Marketplace</h5>
                        <h4>Smart PI Mall</h4>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="protigamas__features">
        <div class="section__container features__grid">
            <div class="feature__card">
                <i class="ri-global-line"></i>
                <h4>Platform Terintegrasi</h4>
                <p>
                    Akses berbagai kebutuhan—belanja, liburan, hingga peluang cuan digital—dalam satu ekosistem tanpa
                    berpindah platform.
                </p>
            </div>
            <div class="feature__card">
                <i class="ri-customer-service-2-line"></i>
                <h4>Dukungan Ramah & Responsif</h4>
                <p>
                    Tim support kami siap membantu Anda kapan pun dibutuhkan, mulai dari transaksi marketplace hingga
                    konsultasi liburan.
                </p>
            </div>
            <div class="feature__card">
                <i class="ri-bit-coin-line"></i>
                <h4>Potensi Cuan Harian</h4>
                <p>
                    Aktifkan Smart Node.Pro dan dapatkan reward harian dari sistem node terdesentralisasi yang transparan
                    dan menguntungkan.
                </p>
            </div>
            <div class="feature__card">
                <i class="ri-flight-takeoff-line"></i>
                <h4>Liburan Tanpa Ribet</h4>
                <p>
                    Smart Vakansi hadir dengan paket fleksibel dan mudah diakses—mulai dari wisata keluarga hingga open trip
                    komunitas.
                </p>
            </div>
        </div>
    </section>


    <section class="section__container about__container" id="about">
        <div class="about__header">
            <div>
                <h2 class="section__header">
                    Dari kebutuhan sehari-hari, liburan, hingga peluang penghasilan. Semua bisa dalam satu aplikasi
                </h2>
            </div>
            <p class="section__description">
                Mulai dari meraih peluang cuan digital lewat Smart Node.Pro, menikmati liburan tanpa ribet bersama Smart
                Vakansi, hingga belanja dan berjualan lebih praktis di Smart PI Mall, semuanya dirancang untuk menunjang
                gaya hidup modern dan produktif Anda.
            </p>
        </div>
        <div class="about__grid">
            <a href="node.html" class="about__card">
                <p>Mining Crypto</p>
                <h4>Smart Node.Pro</h4>
            </a>
            <a href="vakansi.html" class="about__card">
                <p>Tour & Travel</p>
                <h4>Smart Vakansi</h4>
            </a>
            <a href="https://protigamas.id" class="about__card">
                <p>Marketplace</p>
                <h4>Smart PI Mall</h4>
            </a>
        </div>
    </section>

    <section id="map-section" style="background:#f3f4f6; padding: 4rem 1rem; text-align: center;">
        <h2 style="font-size: 2rem; font-weight: 700; color: #111827; margin-bottom: 1rem;">
            Jangkauan Luas di Seluruh Indonesia
        </h2>
        <p style="max-width: 700px; margin: auto; color: #6b7280; font-size: 1rem; line-height: 1.8; margin-bottom: 2rem;">
            Protigamas telah membangun jaringan yang luas dan terpercaya di lebih dari
            <strong style="color:#6b7280;">50 kota</strong> di seluruh Indonesia. Dengan infrastruktur
            yang terus berkembang, kami berkomitmen untuk menjangkau lebih banyak wilayah demi mendukung
            pertumbuhan industri dan kemudahan akses layanan.
        </p>
        <div style="display:flex; justify-content:center;">
            <svg viewBox="0 0 800 350" width="90%" height="auto">
                <defs>
                    <style>
                        .pulse-line {
                            stroke: #fcb900;
                            stroke-width: 2;
                            fill: none;
                            stroke-dasharray: 4;
                            animation: dashmove 2s infinite linear;
                        }

                        @keyframes dashmove {
                            0% {
                                stroke-dashoffset: 0;
                            }

                            100% {
                                stroke-dashoffset: -20;
                            }
                        }

                        .city-dot {
                            animation: pulse 1.8s infinite ease-in-out;
                        }

                        @keyframes pulse {

                            0%,
                            100% {
                                r: 6;
                                opacity: 1;
                            }

                            50% {
                                r: 8;
                                opacity: 0.6;
                            }
                        }
                    </style>
                </defs>

                <!-- Background -->
                <image href="{{ asset('assets/peta.png') }}" x="0" y="0" height="100%" width="100%" />

                <!-- Pati center -->
                <circle cx="300" cy="243" r="8" fill="#fcb900">
                    <title>Pati, Jawa Tengah</title>
                </circle>

                <!-- Titik kota lain -->
                <circle class="city-dot" cx="140" cy="150" r="6" fill="#fcb900">
                    <title>Medan</title>
                </circle>
                <circle class="city-dot" cx="213" cy="240" r="6" fill="#fcb900">
                    <title>Bandung</title>
                </circle>
                <circle class="city-dot" cx="340" cy="140" r="6" fill="#fcb900">
                    <title>Surabaya</title>
                </circle>
                <circle class="city-dot" cx="400" cy="276" r="6" fill="#fcb900">
                    <title>Makassar</title>
                </circle>
                <circle class="city-dot" cx="440" cy="190" r="6" fill="#fcb900">
                    <title>Manado</title>
                </circle>
                <circle class="city-dot" cx="690" cy="180" r="6" fill="#fcb900">
                    <title>Papua</title>
                </circle>

                <!-- Garis curved dari Pati ke kota-kota -->
                <path class="pulse-line" d="M300,243 Q220,180 140,150" /> <!-- Medan -->
                <path class="pulse-line" d="M300,243 Q260,240 213,240" /> <!-- Bandung -->
                <path class="pulse-line" d="M300,243 Q320,180 340,140" /> <!-- Surabaya -->
                <path class="pulse-line" d="M300,243 Q350,270 400,276" /> <!-- Makassar -->
                <path class="pulse-line" d="M300,243 Q370,200 440,190" /> <!-- Manado -->
                <path class="pulse-line" d="M300,243 Q490,160 690,180" /> <!-- Papua -->
            </svg>
        </div>
    </section>


    <section class="section__container faq__container" id="faq">
        <div class="faq__image">
            <img src="{{ asset('assets/faq.jpg') }}" alt="faq" />
        </div>
        <div class="faq__content">
            <h2 class="section__header">Pertanyaan Umum Seputar Protigamas</h2>
            <p class="section__description">
                Temukan jawaban cepat untuk pertanyaan Anda mengenai layanan Smart Vakansi, Smart Node.Pro, dan Smart PI
                Mall.
            </p>
            <div class="faq__grid">
                <div class="faq__card">
                    <div class="faq__header">
                        <h4>Apa itu Smart Vakansi?</h4>
                        <span><i class="ri-arrow-down-s-line"></i></span>
                    </div>
                    <div class="faq__description">
                        Smart Vakansi adalah layanan perjalanan dari Protigamas yang menyediakan paket liburan lengkap
                        dengan harga terjangkau dan proses pemesanan yang mudah.
                    </div>
                </div>
                <div class="faq__card">
                    <div class="faq__header">
                        <h4>Bagaimana cara mendapatkan penghasilan dari Smart Node.Pro?</h4>
                        <span><i class="ri-arrow-down-s-line"></i></span>
                    </div>
                    <div class="faq__description">
                        Cukup bergabung sebagai mitra Node.Pro dan aktifkan node Anda. Setiap hari Anda akan menerima reward
                        digital sesuai performa jaringan.
                    </div>
                </div>
                <div class="faq__card">
                    <div class="faq__header">
                        <h4>Apakah Smart PI Mall hanya untuk belanja?</h4>
                        <span><i class="ri-arrow-down-s-line"></i></span>
                    </div>
                    <div class="faq__description">
                        Tidak. Selain untuk belanja, Smart PI Mall juga bisa digunakan untuk berjualan. Anda bisa membuka
                        toko online sendiri dalam ekosistem Protigamas.
                    </div>
                </div>
                <div class="faq__card">
                    <div class="faq__header">
                        <h4>Apakah saya harus membayar untuk bergabung?</h4>
                        <span><i class="ri-arrow-down-s-line"></i></span>
                    </div>
                    <div class="faq__description">
                        Tidak. Anda dapat membuat akun secara gratis. Beberapa fitur premium seperti aktivasi Node.Pro atau
                        paket liburan akan memiliki biaya sesuai pilihan Anda.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trust__section">
        <div class="section__container trust__container">
            <div class="trust__text">
                <h2>
                    Keamanan & Kepercayaan dalam<br>Setiap Transaksi dan Aktivitas Digital Anda
                </h2>
            </div>
            <div class="trust__cards">
                <div class="trust__card">
                    <p>Perlindungan penuh dalam setiap langkah</p>
                    <h3><span class="highlight-blue">Proteksi</span> Transaksi</h3>
                    <p class="description">
                        Semua transaksi di Smart PI Mall dilindungi dengan sistem verifikasi berlapis. Dana Anda aman,
                        barang sampai tujuan, dan tidak perlu khawatir penipuan.
                    </p>
                    <div class="trust__buttons">
                        <a href="#" class="btn--outline"><i class="ri-shield-check-line"></i> Pelajari Lebih
                            Lanjut</a>
                        <a href="#" class="btn--link">Lihat Panduan</a>
                    </div>
                </div>
                <div class="trust__card">
                    <p>Dukungan komunitas dan sistem terpercaya</p>
                    <h3><span class="highlight-yellow">Node</span> Terverifikasi</h3>
                    <p class="description">
                        Smart Node.Pro dikelola dengan sistem transparan berbasis blockchain. Anda bisa memantau performa
                        dan potensi cuan secara real-time dengan teknologi terpercaya.
                    </p>
                    <div class="trust__buttons">
                        <a href="#" class="btn--outline"><i class="ri-bar-chart-box-line"></i> Lihat Statistik</a>
                        <a href="#" class="btn--link">Aktifkan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section__container client__container" id="client">
        <h2 class="section__header">Dari Mereka Yang Berkembang Bersama Kami</h2>
        <p
            style="max-width: 900px; margin: auto; color: #6b7280; font-size: 1rem; line-height: 1.8; margin-bottom: 4rem; text-align: center;">
            Manfaatkan member gratis protigamas.com untuk mendukung segala jenis solusi bisnis Anda, dari yang mudah hingga
            kompleks.
        </p>
        <div class="swiper client-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="client__box">
                        <img src="{{ asset('assets/client-1.jpg') }}" alt="client" class="client__photo" />
                        <div class="client__info">
                            <h4>Melati Sari</h4>
                            <p class="client__role">Owner Katering</p>
                            <p class="client__quote">
                                “Dulu repot cari bahan dan supplier, sekarang lewat Protigamas semua jadi lebih gampang dan
                                efisien.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client__box">
                        <img src="{{ asset('assets/client-2.jpg') }}" alt="client" class="client__photo" />
                        <div class="client__info">
                            <h4>Rudi Hartono</h4>
                            <p class="client__role">Pemilik Toko Elektronik</p>
                            <p class="client__quote">
                                “Smart PI Mall membantu saya memperluas jangkauan penjualan hingga ke luar kota. Prosesnya
                                mudah dan cepat!”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client__box">
                        <img src="{{ asset('assets/client-3.jpg') }}" alt="client" class="client__photo" />
                        <div class="client__info">
                            <h4>Sri Wahyuni</h4>
                            <p class="client__role">Ibu Rumah Tangga</p>
                            <p class="client__quote">
                                “Saya pakai Smart Vakansi untuk liburan keluarga, tinggal pilih paket, langsung berangkat.
                                Praktis banget!”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client__box">
                        <img src="{{ asset('assets/client-a.png') }}" alt="client" class="client__photo" />
                        <div class="client__info">
                            <h4>Andi Setiawan</h4>
                            <p class="client__role">Freelancer</p>
                            <p class="client__quote">
                                “Gabung Smart Node.Pro jadi solusi pasif income saya. Cuan tiap hari tanpa harus ribet.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client__box">
                        <img src="{{ asset('assets/client-s.png') }}" alt="client" class="client__photo" />
                        <div class="client__info">
                            <h4>Siska Marpaung</h4>
                            <p class="client__role">Karyawan Swasta</p>
                            <p class="client__quote">
                                “Suka banget fitur lengkap Protigamas! Bisa belanja, jalan-jalan, sampai investasi node di
                                satu aplikasi.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="client__box">
                        <img src="{{ asset('assets/client-8.png') }}" alt="client" class="client__photo" />
                        <div class="client__info">
                            <h4>Bayu Nugroho</h4>
                            <p class="client__role">Mahasiswa</p>
                            <p class="client__quote">
                                “Saya pelajari teknologi blockchain lewat Node.Pro, sekarang saya paham dan dapat
                                penghasilan tambahan juga.”
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigasi -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>



    <section class="banner">
        <div class="section__container banner__container">
            <div class="banner__content">
                <h3 class="section__subheader">Selalu Terhubung Dengan Kami</h3>
                <h2 class="section__header">Dapatkan Promo Liburan & Peluang Cuan</h2>
                <p class="section__description">
                    Daftarkan email Anda untuk menerima penawaran eksklusif Smart Vakansi, peluang penghasilan dari Smart
                    Node.Pro, serta info terbaru dari Smart PI Mall.
                </p>
            </div>
            <div class="banner__form">
                <form action="/">
                    <input type="text" placeholder="Masukkan Email Anda" />
                    <button class="btn">Daftar</button>
                </form>
            </div>
        </div>
    </section>
@endsection

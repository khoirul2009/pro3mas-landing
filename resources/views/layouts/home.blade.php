{{-- resources/views/layouts/home.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Protigamas</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="icon" href="{{ asset('assets/icon.png') }}" type="image/png" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    @stack('styles')
</head>

<body>
    <div class="min-h-screen flex flex-col">

        <main class="flex-1">
            @yield('content')
        </main>
        <footer id="contact">
            <div class="section__container footer__container">
                <div class="footer__col">
                    <h4>Protigamas.com</h4>
                    <p>
                        PT Protigamas merupakan perusahaan teknologi yang mengembangkan marketplace inovatif untuk
                        produk dan layanan terintegrasi, seperti properti, kendaraan, dan pariwisata. Kami mengundang
                        Anda untuk berinvestasi di platform kami dengan potensi pengembalian tinggi melalui pertumbuhan
                        eksponensial, teknologi modern, dan strategi bisnis yang matang.
                    </p>
                    <button class="btn"
                        onclick="window.location.href='https://wa.me/628815916464?text=Halo%20protigamas,%20saya%20butuh%20bantuan'">Hubungi
                        Kami</button>
                </div>
                <div class="footer__col">
                    <h4>Kategori</h4>
                    <ul class="footer__links">
                        <li><a href="/node">Smart Node.Pro</a></li>
                        <li><a href="/vacancy">Smart Vakansi</a></li>
                        <li><a href="/marketplace">Smart PI Mall</a></li>
                    </ul>
                </div>
                <div class="footer__col">
                    <h4>Jelajahi Protigamas</h4>
                    <ul class="footer__links">
                        <li><a href="/careers">Karir</a></li>
                        <li><a href="/branchoffice">Lokasi Cabang</a></li>
                        <li><a href="/investor">Hubungan Investor</a></li>
                    </ul>
                </div>
                <div class="footer__col">
                    <h4>Layanan Pelanggan</h4>
                    <ul class="footer__links">
                        <li><a href="/help">Pusat Bantuan</a></li>
                        <li><a href="/trust">Tanggung Jawab</a></li>
                    </ul>
                </div>
                <div class="footer__col">
                    <h4>Ikuti Kami</h4>
                    <div class="footer__media">
                        <img src="{{ asset('assets/media-1.jpg') }}" alt="media" />
                        <img src="{{ asset('assets/media-2.jpg') }}" alt="media" />
                        <img src="{{ asset('assets/media-3.jpg') }}" alt="media" />
                        <img src="{{ asset('assets/media-4.jpg') }}" alt="media" />
                        <img src="{{ asset('assets/media-5.jpg') }}" alt="media" />
                        <img src="{{ asset('assets/media-6.jpg') }}" alt="media" />
                    </div>
                    <div class="footer__socials">
                        <a href="https://www.facebook.com/share/1AyXAYsDsQ/?mibextid=wwXIfr"><i
                                class="ri-facebook-fill"></i></a>
                        <a href="https://www.instagram.com/protigamas_official?igsh=MTI0OWtsaHg2N2dsbQ=="><i
                                class="ri-instagram-line"></i></a>
                        <a href=https://www.tiktok.com/@protigamas?_t=ZS-8yBn6Dg7rxi&_r=1"><i
                                class="ri-tiktok-fill"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer__bar">
                Copyright © 2025 PT. Protigamas Harsa Nawasena. Seluruh hak dilindungi.
            </div>
        </footer>
    </div>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>

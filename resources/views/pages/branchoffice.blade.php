@extends('layouts.home')

@push('styles')
    <style>
        .header {
            background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url("assets/cabang.jpg");
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
            <h1>Cabang Kami – Lebih Dekat, Lebih Terpercaya</h1>
            <p>Protigamas hadir di berbagai wilayah Indonesia melalui jaringan cabang dan mitra resmi yang siap melayani
                Anda dengan profesionalisme dan komitmen tinggi.</p>
        </div>
    </header>
    <section class="branch-section">
        <div class="branch-header">
            <h2>Lokasi Cabang Kami</h2>
            <p>Temukan lokasi mitra dan cabang resmi Protigamas di seluruh Indonesia.</p>
        </div>
        <div class="branch-table">
            <div class="branch-row branch-head">
                <div>Logo</div>
                <div>Nama Cabang</div>
                <div>Kabupaten/Kota</div>
                <div>Status</div>
                <div>Aksi</div>
            </div>
            @foreach ($offices as $office)
                <div class="branch-row">
                    <div><img src="assets/icon.png" alt="Mitra 1" /></div>
                    <div>{{ $office->name }}</div>
                    <div>{{ $office->location }}</div>
                    <div><span class="badge badge-active">Aktif</span></div>
                    <div>
                        <button class="btn-table" data-nama="{{ $office->name }}" data-direktur="{{ $office->director }}"
                            data-perusahaan="{{ $office->pt }}">
                            Detail
                        </button>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <div class="modal-overlay" id="modal-overlay">
        <div class="modal-box">
            <h3 id="modal-branch-name"></h3>
            <p><strong>Direktur:</strong> <span id="modal-direktur"></span></p>
            <p><strong>Perusahaan:</strong> <span id="modal-perusahaan"></span></p>
            <button class="modal-close" onclick="closeModal()">Tutup</button>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll(".btn-table").forEach((btn) => {
            btn.addEventListener("click", () => {
                const nama = btn.getAttribute("data-nama");
                const direktur = btn.getAttribute("data-direktur");
                const perusahaan = btn.getAttribute("data-perusahaan");

                document.getElementById("modal-branch-name").textContent = nama;
                document.getElementById("modal-direktur").textContent = direktur;
                document.getElementById("modal-perusahaan").textContent = perusahaan;

                document.getElementById("modal-overlay").classList.add("show");
            });
        });

        function closeModal() {
            document.getElementById("modal-overlay").classList.remove("show");
        }
    </script>
@endpush

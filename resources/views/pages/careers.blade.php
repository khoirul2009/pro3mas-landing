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
            <h1>Karir – Tumbuh Bersama, Berdampak Lebih Luas</h1>
            <p>Gabung bersama tim yang inovatif dan berdedikasi membangun ekosistem digital Indonesia.</p>
        </div>
    </header>

    <section class="job-section">
        <h2>Lowongan Tersedia</h2>
        <div class="job-listing">
            @foreach ($vacancies as $vacancy)
                <div class="job-card">
                    <h3>{{ $vacancy->title }}</h3>
                    <p class="location"><i class="ri-map-pin-line"></i> {{ $vacancy->location }}</p>
                    <div class="description">{!! $vacancy->description !!}</div>
                </div>
            @endforeach

        </div>
    </section>
@endsection

@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero text-white text-center py-5" style="background: linear-gradient(135deg, #4e73df, #1cc88a);">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s">
                    <h1 class="display-4 mb-4 animated fadeInUp">Selamat Datang di Konveksi Kami</h1>
                    <p class="lead mb-4 animated fadeInUp">Solusi Konveksi Berkualitas dengan Harga Terjangkau.</p>
                    <a href="{{ route('login') }}" class="btn btn-light btn-lg px-4 py-2 rounded-pill animated fadeInUp" data-wow-delay="0.3s">Masuk ke Akun</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg px-4 py-2 rounded-pill ms-3 animated fadeInUp" data-wow-delay="0.6s">Daftar Sekarang</a>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-duration="1s">
                    <img src="https://via.placeholder.com/500x400.png?text=Konveksi+Image" class="img-fluid rounded-lg shadow-lg animated fadeInRight" alt="Konveksi Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Kami Section -->
    <section id="services" class="services py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4 wow fadeInUp" data-wow-duration="1s">Layanan Kami</h2>
            <div class="row">
                <!-- Pakaian Kerja -->
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="card shadow border-light rounded-lg overflow-hidden">
                        <img src="https://via.placeholder.com/300x200.png?text=Pakaian+Kerja" class="card-img-top" alt="Pakaian Kerja">
                        <div class="card-body">
                            <h5 class="card-title">Pakaian Kerja</h5>
                            <p class="card-text">Desain pakaian kerja yang nyaman dan berkualitas untuk perusahaan Anda.</p>
                        </div>
                    </div>
                </div>
                <!-- Kaos Promosi -->
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="card shadow border-light rounded-lg overflow-hidden">
                        <img src="https://via.placeholder.com/300x200.png?text=Kaos+Promosi" class="card-img-top" alt="Kaos Promosi">
                        <div class="card-body">
                            <h5 class="card-title">Kaos Promosi</h5>
                            <p class="card-text">Kaos promosi custom dengan desain menarik untuk kebutuhan branding Anda.</p>
                        </div>
                    </div>
                </div>
                <!-- Custom Merchandise -->
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                    <div class="card shadow border-light rounded-lg overflow-hidden">
                        <img src="https://via.placeholder.com/300x200.png?text=Custom+Merchandise" class="card-img-top" alt="Custom Merchandise">
                        <div class="card-body">
                            <h5 class="card-title">Custom Merchandise</h5>
                            <p class="card-text">Merchandise custom untuk acara perusahaan, event, atau komunitas Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hubungi Kami Section -->
    <section id="contact" class="contact py-5 text-white bg-dark">
        <div class="container text-center">
            <h2 class="mb-4 wow fadeInUp" data-wow-duration="1s">Hubungi Kami</h2>
            <p class="lead mb-4 wow fadeInUp" data-wow-duration="1s">Jika Anda memiliki pertanyaan atau ingin memesan produk, silakan hubungi kami sekarang!</p>
            <a href="mailto:contact@konveksi.com" class="btn btn-primary btn-lg px-4 py-2 rounded-pill wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Email Kami</a>
        </div>
    </section>

@endsection

@push('styles')
    <!-- Wow.js CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <!-- Wow.js JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
@endpush

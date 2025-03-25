<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero bg-dark text-white text-center py-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">
                    <h1 class="display-4">Selamat Datang di Konveksi Kami</h1>
                    <p class="lead">Solusi Konveksi Berkualitas dengan Harga Terjangkau.</p>
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Masuk ke Akun</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg ms-3">Daftar Sekarang</a>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x400.png?text=Konveksi+Image" class="img-fluid" alt="Konveksi Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Kami Section -->
    <section id="services" class="services py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Layanan Kami</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow border-light">
                        <img src="https://via.placeholder.com/300x200.png?text=Pakaian+Kerja" class="card-img-top" alt="Pakaian Kerja">
                        <div class="card-body">
                            <h5 class="card-title">Pakaian Kerja</h5>
                            <p class="card-text">Desain pakaian kerja yang nyaman dan berkualitas untuk perusahaan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow border-light">
                        <img src="https://via.placeholder.com/300x200.png?text=Kaos+Promosi" class="card-img-top" alt="Kaos Promosi">
                        <div class="card-body">
                            <h5 class="card-title">Kaos Promosi</h5>
                            <p class="card-text">Kaos promosi custom dengan desain menarik untuk kebutuhan branding Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow border-light">
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
            <h2 class="mb-4">Hubungi Kami</h2>
            <p class="lead">Jika Anda memiliki pertanyaan atau ingin memesan produk, silakan hubungi kami sekarang!</p>
            <a href="mailto:contact@konveksi.com" class="btn btn-primary btn-lg">Email Kami</a>
        </div>
    </section>
@endsection

@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="container mt-4">
        <div class="jumbotron text-center">
            <h1 class="display-4">Selamat Datang di TegarApp!</h1>
            <p class="lead">Website Dokumentasi Hasil Belajar Saya.</p>
            <a href="/profile" class="btn btn-primary btn-lg">Lihat Profil</a>
        </div>

        <h2 class="text-center my-5">Dokumentasi yang Tersedia</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="ambajus.JPG" class="card-img-top" alt="amba">
                    <div class="card-body text-center">
                        <h5 class="card-title">Website UMKM (Latest Release)</h5>
                        <a href="https://ambajuice.tegarahay.my.id/" class="btn btn-pink" target="_blank">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="hotwheel.JPG" class="card-img-top" alt="hotwheel">
                    <div class="card-body text-center">
                        <h5 class="card-title">Website E-commerce Pribadi</h5>
                        <a href="https://gargarage.tegarahay.my.id/" class="btn btn-pink" target="_blank">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="lebron.JPG" class="card-img-top" alt="LJ">
                    <div class="card-body text-center">
                        <h5 class="card-title">Blogsite Lebron James (Fanmade)</h5>
                        <a href="https://lebronjames.tegarahay.my.id/" class="btn btn-pink" target="_blank">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        
        <h2 class="text-center my-5">Testimoni</h2>
        <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <img src="https://jobsheet4.radivahera.my.id/images/user1.png" class="rounded-circle mb-3" alt="Andi">
                    <blockquote class="blockquote">
                        <p>"Aplikasi ini sangat membantu dan mudah digunakan!"</p>
                        <footer class="blockquote-footer">Andi</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
@endsection

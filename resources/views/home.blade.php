@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="container mt-4">
        <div class="jumbotron text-center">
            <h1 class="display-4">Selamat Datang di HoloFandom!</h1>
            <p class="lead">Website Fandom Vtuber Agensi Hololive.</p>
            <a href="/profile" class="btn btn-primary btn-lg">Lihat Profil</a>
        </div>

        <h2 class="text-center my-5">Talent Favorit Tiap Generasi</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="Moona.png" class="card-img-top" alt="Moona">
                    <div class="card-body">
                        <h5 class="card-title">Gen 1 (AREA51) - Moona Hoshinova</h5>
                        <p class="card-text">Seorang mahasiswi yang berprofesi sebagai model dan idol, tetapi kemudian tertarik untuk menjadi VTuber juga.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="Anya.png" class="card-img-top" alt="Anya">
                    <div class="card-body">
                        <h5 class="card-title">Gen 2 (Holoro) - Anya Melfissa</h5>
                        <p class="card-text">Senjata kuno yang dikenal sebagai “Keris”, dia diberikan bentuk manusia melalui ritual mistis yang dilakukan oleh tuannya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="Zeta.png" class="card-img-top" alt="Zeta">
                    <div class="card-body">
                        <h5 class="card-title">Gen 3 (Holoh3ro) - Vestia Zeta</h5>
                        <p class="card-text">Rekrutan ke-7 yang misterius dari Unit Arsip Rahasia yang memiliki lisensi penuh untuk mengumpulkan data virtual.</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center my-5">Proyek Terkini</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="https://jobsheet4.radivahera.my.id/images/project1.jpg" class="card-img-top" alt="Proyek A">
                    <div class="card-body">
                        <h5 class="card-title">Proyek A</h5>
                        <p class="card-text">Deskripsi singkat proyek A.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="https://jobsheet4.radivahera.my.id/images/project2.jpg" class="card-img-top" alt="Proyek B">
                    <div class="card-body">
                        <h5 class="card-title">Proyek B</h5>
                        <p class="card-text">Deskripsi singkat proyek B.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="https://jobsheet4.radivahera.my.id/images/project3.jpg" class="card-img-top" alt="Proyek C">
                    <div class="card-body">
                        <h5 class="card-title">Proyek C</h5>
                        <p class="card-text">Deskripsi singkat proyek C.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Selengkapnya</a>
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
                <div class="carousel-item">
                    <img src="https://jobsheet4.radivahera.my.id/images/user2.png" class="rounded-circle mb-3" alt="Budi">
                    <blockquote class="blockquote">
                        <p>"Fitur-fiturnya keren dan desainnya menarik."</p>
                        <footer class="blockquote-footer">Budi</footer>
                    </blockquote>
                </div>
                <div class="carousel-item">
                    <img src="https://jobsheet4.radivahera.my.id/images/user3.png" class="rounded-circle mb-3" alt="Citra">
                    <blockquote class="blockquote">
                        <p>"Sangat puas dengan performa dan keandalannya."</p>
                        <footer class="blockquote-footer">Citra</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
@endsection

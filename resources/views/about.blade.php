@extends('layouts.app')
@section('title', 'About')
@section('content')    
<div class="container mt-4">
        <h1 class="text-center">Dokumentasi Website</h1>
        <p class="text-center">Panduan penggunaan teknologi yang digunakan dalam pengembangan website ini.</p>
        
        <!-- PHP Section -->
        <div class="mb-5">
            <h2>1. PHP</h2>
            <p>Website ini menggunakan PHP sebagai backend utama. Berikut adalah beberapa fitur yang diimplementasikan dengan PHP:</p>
            <ul>
                <li>Routing menggunakan Laravel atau PHP Native</li>
                <li>Koneksi ke database menggunakan MySQL</li>
                <li>Validasi data input dari pengguna</li>
            </ul>
            <pre><code>&lt;?php
    echo "Halo, ini contoh kode PHP!";
?&gt;</code></pre>
        </div>
        
        <!-- JavaScript Section -->
        <div class="mb-5">
            <h2>2. JavaScript</h2>
            <p>JavaScript digunakan untuk meningkatkan interaktivitas pada website. Contoh fitur yang dibuat menggunakan JS:</p>
            <ul>
                <li>Validasi formulir secara real-time</li>
                <li>Manipulasi DOM untuk tampilan dinamis</li>
                <li>AJAX untuk komunikasi dengan server tanpa reload</li>
            </ul>
            <pre><code>document.addEventListener("DOMContentLoaded", function() {
    alert("Halo, ini contoh kode JavaScript!");
});</code></pre>
        </div>
        
        <!-- CSS Section -->
        <div class="mb-5">
            <h2>3. CSS</h2>
            <p>CSS digunakan untuk mendesain tampilan website agar lebih menarik. Teknologi CSS yang digunakan meliputi:</p>
            <ul>
                <li>Bootstrap untuk desain responsif</li>
                <li>CSS kustom untuk personalisasi tampilan</li>
                <li>Flexbox dan Grid untuk layout modern</li>
            </ul>
            <pre><code>body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
}</code></pre>
        </div>
    </div>

        <h2 class="text-center">Tim Kami</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card">
                    <img src="Rusdi_Omaygot.png" class="card-img-top" alt="Founder">
                    <div class="card-body">
                        <h5 class="card-title">Akang Tegar Berjiwa Rusdi😈😈</h5>
                        <p class="card-text">Founder &amp; CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="ambatukam.webp" class="card-img-top" alt="Lead Designer">
                    <div class="card-body">
                        <h5 class="card-title">Wak Amba</h5>
                        <p class="card-text">Lead Plushie Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="Mironi.jpeg" class="card-img-top" alt="Marketing">
                    <div class="card-body">
                        <h5 class="card-title">Cik Ironi</h5>
                        <p class="card-text">Marketing &amp; Sales</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="text-center mt-5">
            <h2>Hubungi Kami</h2>
            <p>Email: <a href="mailto:info@plushiehololive.com">imanueltegarn@gmail.com</a></p>
            <p>Telepon: <a href="tel:+62123456789">+62 882007014511</a></p>
        </div>
    </div>
@endsection
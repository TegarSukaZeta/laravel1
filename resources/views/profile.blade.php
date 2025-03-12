@extends('layouts.app')
@section('title', 'Profil Pengguna')
@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="card text-center p-4" style="width: 38rem;">
                <div class="card-header">
                    Profil Saya
                </div>
                <div class="card-body text-center">
                    <img src="Rusdi_Omaygot.png" alt="Profile Picture" class="profile-img mx-auto d-block">
                    <h4 class="fw-bold">{{$profile['name']}}</h4>
                    <p class="text-muted mb-1"><i class="bi bi-envelope">{{$profile['email']}}</i></p>
                    <p class="text-muted">{{$profile['bio']}}</p>
                    
                    @if (count($profile['skills']) >0 )
                    <h5 class="mt-4">Keahlian:</h5>
                    <div class="d-flex justify-content-center flex-wrap">
                        @foreach($profile ['skills'] as $skill)
                        <span class="badge bg-danger m-1">{{$skill}}</span>
                        @endforeach
                    </div>
                    @else
                    <p>Tidak ada skill yang ditampilkan</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
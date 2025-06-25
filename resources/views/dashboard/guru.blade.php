@extends('layouts.new')

@section('title', 'Dashboard Guru')
@section('role-title', 'PLATFORM GURU')

@section('sidebar-menu')
    <a href="#" class="nav-link"><i class="fas fa-users"></i> Data Siswa</a>
    <a href="#" class="nav-link"><i class="fas fa-book"></i> Mata Pelajaran</a>
    <a href="#" class="nav-link"><i class="fas fa-file-alt"></i> Nilai Siswa</a>
    <a href="#" class="nav-link"><i class="fas fa-user"></i> Profil Guru</a>
@endsection

@section('content')
<div class="row text-white mb-4">
    <div class="col-md-4">
        <div class="card-dashboard bg-blue">
            <i class="fas fa-users fa-2x mb-2"></i>
            <p>Data Siswa</p>
            <h3>{{ $jumlahSiswa }}</h3>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card-dashboard bg-green">
            <i class="fas fa-book fa-2x mb-2"></i>
            <p>Mata Pelajaran</p>
            <h3>{{ $jumlahMapel }}</h3>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card-dashboard bg-yellow">
            <i class="fas fa-file-alt fa-2x mb-2"></i>
            <p>Nilai Siswa</p>
            <h3>{{ $jumlahNilai }}</h3>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body text-center">
        <h2 class="fw-bold" style="color: #003e8a; font-size: 2.5rem;">Selamat Datang, {{ Auth::user()->name }}!</h2>
        <p class="text-muted fs-5 fst-italic mt-2">"Silakan pilih menu di samping untuk mulai mengelola data siswa dan pelajaran."</p>
    </div>
</div>
@endsection

@extends('layouts.new')

@section('title', 'Dashboard Guru')
@section('role-title', 'Guru')

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

    <div class="alert alert-primary text-center">
        <strong>Selamat Datang, Guru!</strong><br>
        Silahkan pilih menu di sebelah untuk mulai mengelola data siswa dan mata pelajaran
    </div>
@endsection

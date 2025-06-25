@extends('layouts.new')

@section('title', 'Dashboard Siswa')
@section('role-title', 'PENILAIAN SISWA')

@section('sidebar-menu')
    <a href="{{ route('dashboard.siswa') }}" class="nav-link {{ request()->routeIs('dashboard.siswa') ? 'active' : '' }}">
        <i class="fas fa-gauge"></i> Dashboard
    </a>
    <a href="{{ route('nilai.siswa') }}" class="nav-link {{ request()->routeIs('nilai.siswa') ? 'active' : '' }}">
        <i class="fas fa-file-alt"></i> Nilai Siswa
    </a>
    <a href="{{ route('profil.siswa') }}" class="nav-link {{ request()->routeIs('profil.siswa') ? 'active' : '' }}">
        <i class="fas fa-user"></i> Profil Siswa
    </a>
@endsection

@section('content')
@php
    $quotes = [
        'Pendidikan adalah senjata paling ampuh untuk mengubah dunia.',
        'Belajar bukan hanya tentang mendapatkan nilai, tetapi tentang memahami dunia.',
        'Ilmu adalah cahaya di tengah kegelapan kebodohan.',
        'Semakin kamu membaca, semakin kamu tahu.',
        'Setiap hari adalah kesempatan untuk belajar hal baru.',
        'Belajar hari ini, pemimpin esok.',
        'Pendidikan membuka pintu masa depan.',
        'Kesuksesan dimulai dari kemauan untuk belajar.',
        'Jangan takut gagal, takutlah jika kamu berhenti belajar.',
        'Belajar adalah investasi terbaik dalam hidup.',
        'Orang bijak belajar dari setiap kesempatan.',
        'Dengan belajar, kita mengubah diri dan dunia.',
        'Pendidikan adalah jembatan menuju masa depan.',
        'Siswa hebat bukan yang pintar, tapi yang tekun belajar.',
        'Waktu yang kamu habiskan untuk belajar tidak akan sia-sia.',
        'Belajarlah dari kesalahan, itu guru terbaik.',
        'Ilmu tidak mengenal batas usia.',
        'Orang sukses adalah pembelajar seumur hidup.',
        'Masa depan milik mereka yang belajar hari ini.',
        'Pendidikan membentuk karakter dan kepribadian.',
        'Buku adalah jendela dunia.',
        'Sekolah adalah tempat menyiapkan masa depan.',
        'Makin kamu belajar, makin kamu tumbuh.',
        'Setiap guru adalah pelita bagi masa depan.',
        'Jangan lelah menjadi pelajar sepanjang hayat.'
    ];
    $quote = $quotes[array_rand($quotes)];
@endphp

<div class="row text-white mb-4">
    <div class="col-md-4">
        <div class="card-dashboard bg-blue">
            <i class="fas fa-book fa-2x mb-2"></i>
            <p>Mata Pelajaran</p>
            <h3>{{ $nilai->count() }}</h3>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card-dashboard bg-green">
            <i class="fas fa-check-circle fa-2x mb-2"></i>
            <p>Total Nilai Siswa</p>
            <h3>{{ $totalNilai }}</h3>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card-dashboard bg-yellow">
            <i class="fas fa-chart-line fa-2x mb-2"></i>
            <p>Nilai Rata-Rata</p>
            <h3>{{ number_format($rataRata, 2) }}</h3>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-body text-center">
        <h2 class="fw-bold" style="color: #003e8a; font-size: 2.5rem;">Selamat Datang, {{ Auth::user()->name }}!</h2>
        <p class="text-muted fs-5 fst-italic mt-2">"{{ $quote }}"</p>
    </div>
</div>
@endsection

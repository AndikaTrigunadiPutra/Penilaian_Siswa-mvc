@extends('layouts.new')

@section('title', 'Dashboard Siswa')
@section('role-title', 'Penilaian Siswa')

@section('sidebar-menu')
    <a href="#" class="nav-link"><i class="fas fa-file-alt"></i> Nilai Siswa</a>
    <a href="#" class="nav-link"><i class="fas fa-user"></i> Profil Siswa</a>
@endsection

@section('content')
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

    <div class="alert alert-primary text-center">
        <strong>Selamat Datang, Siswa!</strong><br>
        Berikut Ringkasan Nilai dan Mata Pelajaran Anda
    </div>

    <h5>Detail Nilai:</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mata Pelajaran</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $n)
                <tr>
                    <td>{{ $n->mataPelajaran->nama }}</td>
                    <td>{{ $n->nilai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('layouts.new')

@section('title', 'Profil Siswa')
@section('role-title', 'PENILAIAN SISWA')

@section('sidebar-menu')
    <a href="{{ route('dashboard.siswa') }}" class="nav-link"><i class="fas fa-gauge"></i> Dashboard</a>
    <a href="{{ route('nilai.siswa') }}" class="nav-link"><i class="fas fa-file-alt"></i> Nilai Siswa</a>
    <a href="{{ route('profil.siswa') }}" class="nav-link active"><i class="fas fa-user"></i> Profil Siswa</a>
@endsection

@section('content')
<div class="card">
    <div class="card-header text-center">Profil Siswa</div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr><th>Nama</th><td>{{ Auth::user()->name }}</td></tr>
            <tr><th>Email</th><td>{{ Auth::user()->email }}</td></tr>
            <tr><th>NIS</th><td>{{ Auth::user()->nis }}</td></tr>
            <tr><th>Kelas</th><td>{{ Auth::user()->kelas }}</td></tr>
        </table>
    </div>
</div>
@endsection

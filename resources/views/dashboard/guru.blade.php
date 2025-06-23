@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard Guru</h2>
    <ul>
        <li>Jumlah Siswa: {{ $jumlahSiswa }}</li>
        <li>Jumlah Mata Pelajaran: {{ $jumlahMapel }}</li>
        <li>Jumlah Nilai yang Diinput: {{ $jumlahNilai }}</li>
    </ul>
</div>
@endsection


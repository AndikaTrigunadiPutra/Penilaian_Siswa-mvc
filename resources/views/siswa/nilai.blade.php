@extends('layouts.new')

@section('title', 'Nilai Siswa')
@section('role-title', 'PENILAIAN SISWA')

@section('sidebar-menu')
    <a href="{{ route('dashboard.siswa') }}" class="nav-link"><i class="fas fa-gauge"></i> Dashboard</a>
    <a href="{{ route('nilai.siswa') }}" class="nav-link active"><i class="fas fa-file-alt"></i> Nilai Siswa</a>
    <a href="{{ route('profil.siswa') }}" class="nav-link"><i class="fas fa-user"></i> Profil Siswa</a>
@endsection

@section('content')
<div class="card">
    <div class="card-header text-center">Tabel Nilai Siswa</div>
    <div class="card-body">
        @if($nilai->isEmpty())
            <div class="alert alert-info">Tidak ada data nilai.</div>
        @else
        <table class="table table-striped table-hover text-center">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nilai as $index => $n)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $n->mataPelajaran->nama }}</td>
                        <td>{{ $n->nilai }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot class="table-light">
                <tr>
                    <td colspan="2" class="text-end"><strong>Total Nilai</strong></td>
                    <td><strong>{{ $totalNilai }}</strong></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-end"><strong>Rata-rata</strong></td>
                    <td><strong>{{ number_format($rataRata, 2) }}</strong></td>
                </tr>
            </tfoot>
        </table>
        @endif
    </div>
</div>
@endsection

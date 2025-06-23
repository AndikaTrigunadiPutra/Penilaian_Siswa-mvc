@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Dashboard Siswa</h2>
    <p>Total Nilai: {{ $totalNilai }}</p>
    <p>Rata-rata Nilai: {{ number_format($rataRata, 2) }}</p>

    <h4>Detail Nilai:</h4>
    <table class="table table-bordered">
        <tr>
            <th>Mata Pelajaran</th>
            <th>Nilai</th>
        </tr>
        @foreach ($nilai as $n)
            <tr>
                <td>{{ $n->mataPelajaran->nama }}</td>
                <td>{{ $n->nilai }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection


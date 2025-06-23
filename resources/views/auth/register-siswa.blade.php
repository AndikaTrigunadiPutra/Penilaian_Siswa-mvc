@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Registrasi Siswa</h2>

    <form action="{{ url('/register/siswa') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>NIS</label>
            <input type="text" name="nis" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>
@endsection

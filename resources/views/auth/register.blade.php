@extends('layouts.app')
@section('title', 'FORM REGISTER')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- Nama --}}
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nama</label>
                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        {{-- Password --}}
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        {{-- Konfirmasi Password --}}
                        <div class="row mb-3">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-end">Konfirmasi Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password"
                                       class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        {{-- Role --}}
                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">Daftar Sebagai</label>
                            <div class="col-md-6">
                                <select id="role" name="role"
                                        class="form-control @error('role') is-invalid @enderror" onchange="toggleRoleFields()" required>
                                    <option value="">-- Pilih Role --</option>
                                    <option value="siswa" {{ old('role') == 'siswa' ? 'selected' : '' }}>Siswa</option>
                                    <option value="guru" {{ old('role') == 'guru' ? 'selected' : '' }}>Guru</option>
                                </select>
                                @error('role')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        {{-- Field Khusus Siswa --}}
                        <div id="siswa-fields" style="display: none;">
                            <div class="row mb-3">
                                <label for="nis" class="col-md-4 col-form-label text-md-end">NIS</label>
                                <div class="col-md-6">
                                    <input id="nis" type="text" class="form-control" name="nis" value="{{ old('nis') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kelas" class="col-md-4 col-form-label text-md-end">Kelas</label>
                                <div class="col-md-6">
                                    <input id="kelas" type="text" class="form-control" name="kelas" value="{{ old('kelas') }}">
                                </div>
                            </div>
                        </div>

                        {{-- Field Khusus Guru --}}
                        <div id="guru-fields" style="display: none;">
                            <div class="row mb-3">
                                <label for="no_telepon" class="col-md-4 col-form-label text-md-end">No Telepon</label>
                                <div class="col-md-6">
                                    <input id="no_telepon" type="text" class="form-control" name="no_telepon" value="{{ old('no_telepon') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-md-4 col-form-label text-md-end">Alamat</label>
                                <div class="col-md-6">
                                    <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">
                                </div>
                            </div>
                        </div>

                        {{-- Tombol Submit --}}
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </div>
                    </form>

                    {{-- Script untuk tampilkan form berdasarkan role --}}
                    <script>
                        function toggleRoleFields() {
                            let role = document.getElementById('role').value;
                            document.getElementById('siswa-fields').style.display = role === 'siswa' ? 'block' : 'none';
                            document.getElementById('guru-fields').style.display = role === 'guru' ? 'block' : 'none';
                        }
                        // trigger saat halaman reload
                        window.onload = toggleRoleFields;
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

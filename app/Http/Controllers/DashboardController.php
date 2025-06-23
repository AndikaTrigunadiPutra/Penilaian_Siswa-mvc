<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\User;
use App\Models\MataPelajaran;

class DashboardController extends Controller
{
    public function siswa()
    {
        $siswa = auth()->user();
        $nilai = $siswa->nilai()->with('mataPelajaran')->get();
        $rataRata = $nilai->avg('nilai');
        $totalNilai = $nilai->sum('nilai');

        return view('dashboard.siswa', compact('nilai', 'rataRata', 'totalNilai'));
    }

    public function guru()
    {
        $jumlahSiswa = User::where('role', 'siswa')->count();
        $jumlahMapel = MataPelajaran::count();
        $jumlahNilai = Nilai::count();

        return view('dashboard.guru', compact('jumlahSiswa', 'jumlahMapel', 'jumlahNilai'));
    }
}


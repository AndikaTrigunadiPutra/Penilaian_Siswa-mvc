<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiSiswaController extends Controller
{
    public function index()
    {
        $siswa = Auth::user();
        $nilai = $siswa->nilai()->with('mataPelajaran')->get();
        $rataRata = $nilai->avg('nilai');
        $totalNilai = $nilai->sum('nilai');

        return view('siswa.nilai', compact('nilai', 'rataRata', 'totalNilai'));
    }
}


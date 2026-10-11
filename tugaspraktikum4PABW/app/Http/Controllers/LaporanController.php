<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Tampilkan form pelaporan
    public function form()
    {
        return view('form-laporan');
    }

    // Simpan data dari form ke database
    public function simpan(Request $request)
    {
        $data = $request->validate([
            'nama_pelapor'     => 'required|string|max:255',
            'lokasi'           => 'required|string|max:255',
            'tinggi_genangan'  => 'required|integer|min:1',
            'tanggal_kejadian' => 'required|date',
        ]);

        $laporan = Laporan::create($data);

        return view('konfirmasi', ['laporan' => $laporan]);
    }

    // Tampilkan daftar laporan dari database
    public function daftar()
    {
        $laporan = Laporan::orderBy('tanggal_kejadian', 'desc')->get();

        return view('daftar-laporan', ['laporan' => $laporan]);
    }
}
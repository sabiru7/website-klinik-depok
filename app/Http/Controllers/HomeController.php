<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Daftar;
use App\Models\Poli;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // ==========================
        // JUMLAH DATA
        // ==========================

        $jumlahPasien = Pasien::count();

        $jumlahDaftar = Daftar::count();

        $jumlahPoli = Poli::count();


        // ==========================
        // PASIEN TERBARU
        // ==========================

        $pasien = Pasien::latest()
            ->take(5)
            ->get();


        // ==========================
        // PENDAFTARAN TERBARU
        // ==========================

        $daftar = Daftar::with('pasien')
            ->latest()
            ->take(5)
            ->get();


        // ==========================
        // KIRIM DATA KE VIEW
        // ==========================

        return view('home', compact(
            'jumlahPasien',
            'jumlahDaftar',
            'jumlahPoli',
            'pasien',
            'daftar'
        ));
    }
}

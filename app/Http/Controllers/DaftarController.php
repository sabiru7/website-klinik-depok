<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DaftarController extends Controller
{
    /**
     * Menampilkan daftar pendaftaran.
     */
    public function index()
    {
        if (request()->has('q') && request('q') != '') {

            $daftar = Daftar::with('pasien')
                ->search(request('q'))
                ->paginate(20);

        } else {

            $daftar = Daftar::with('pasien')
                ->latest()
                ->paginate(20);
        }

        return view('daftar_index', compact('daftar'));
    }

    /**
     * Menampilkan form tambah pendaftaran.
     */
    public function create()
    {
        return view('daftar_create');
    }

    /**
     * Menyimpan data pendaftaran.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'pasien_id' => 'required',
        ]);

        Daftar::create($requestData);

        return redirect('/daftar')
            ->with('pesan', 'Data pendaftaran berhasil disimpan');
    }

    /**
     * Menampilkan detail pendaftaran.
     */
    public function show(Daftar $daftar)
    {
        $daftar->load('pasien');

        return view('daftar_show', compact('daftar'));
    }

    /**
     * Menampilkan form edit.
     */
    public function edit(Daftar $daftar)
    {
        $daftar->load('pasien');

        return view('daftar_edit', compact('daftar'));
    }

    /**
     * Mengubah data pendaftaran.
     */
    public function update(Request $request, Daftar $daftar)
    {
        $requestData = $request->validate([
            'pasien_id' => 'required',
        ]);

        $daftar->update($requestData);

        return redirect('/daftar')
            ->with('pesan', 'Data pendaftaran berhasil diubah');
    }

    /**
     * Menghapus data pendaftaran.
     */
    public function destroy(Daftar $daftar)
    {
        $daftar->delete();

        return redirect('/daftar')
            ->with('pesan', 'Data pendaftaran berhasil dihapus');
    }

    public function cetakPdf()
{
    $daftar = Daftar::with(['pasien', 'poli'])
        ->orderBy('tanggal_daftar', 'desc')
        ->get();

    $pdf = Pdf::loadView('daftar_laporan', compact('daftar'));

    $pdf->setPaper('A4', 'landscape');

    return $pdf->download('laporan-daftar-pasien.pdf');
}
}


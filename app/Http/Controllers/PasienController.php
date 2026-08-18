<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pasien;
use Barryvdh\DomPDF\Facade\Pdf;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->has('q')) {
            $pasien = Pasien::search(request('q'))->paginate(10);
        } else {
            $pasien = Pasien::latest()->paginate(10);
        }

        $data['pasien'] = $pasien;

        return view('pasien_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'no_pasien'     => 'required|unique:pasiens,no_pasien',
            'nama'          => 'required',
            'umur'          => 'required|numeric',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'alamat'        => 'nullable',
            'foto'          => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pasien = new Pasien();
        $pasien->no_pasien = $requestData['no_pasien'];
        $pasien->nama = $requestData['nama'];
        $pasien->umur = $requestData['umur'];
        $pasien->jenis_kelamin = $requestData['jenis_kelamin'];
        $pasien->alamat = $requestData['alamat'];

        if ($request->hasFile('foto')) {
            $fotoName = time() . '.' . $request->foto->extension();
            $request->file('foto')->storeAs('public/images', $fotoName);
            $pasien->foto = $fotoName;
        }

        $pasien->save();

        return redirect('/pasien')
            ->with('pesan', 'Data sudah disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['pasien'] = Pasien::findOrFail($id);

        return view('pasien_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            'no_pasien'     => 'required|unique:pasiens,no_pasien,' . $id,
            'nama'          => 'required|min:2',
            'umur'          => 'required|numeric',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'alamat'        => 'nullable',
            'foto'          => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pasien = Pasien::findOrFail($id);

        $pasien->no_pasien = $requestData['no_pasien'];
        $pasien->nama = $requestData['nama'];
        $pasien->umur = $requestData['umur'];
        $pasien->jenis_kelamin = $requestData['jenis_kelamin'];
        $pasien->alamat = $requestData['alamat'];

        if ($request->hasFile('foto')) {
            $fotoName = time() . '.' . $request->foto->extension();

            $request->file('foto')->storeAs('public/images', $fotoName);

            if ($pasien->foto) {
                Storage::delete('public/images/' . $pasien->foto);
            }

            $pasien->foto = $fotoName;
        }

        $pasien->save();

        return redirect('/pasien')
            ->with('pesan', 'Data sudah diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::findOrFail($id);

        if ($pasien->foto) {
            Storage::delete('public/images/' . $pasien->foto);
        }

        $pasien->delete();

        return redirect('/pasien')
            ->with('pesan', 'Data sudah dihapus');
    }

    /**
     * Cetak laporan pasien dalam bentuk PDF.
     */
    public function cetakPdf()
    {
        $pasien = Pasien::orderBy('nama', 'ASC')->get();

        $pdf = Pdf::loadView('pasien_laporan', [
            'pasien' => $pasien
        ]);

        return $pdf->download('laporan-data-pasien.pdf');
    }
}

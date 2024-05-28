<?php

namespace App\Http\Controllers;

use App\Models\KeperluanKunjungan;
use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index()
    {
        $keperluan_kunjungans = KeperluanKunjungan::all();
        return view('main', compact('keperluan_kunjungans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'no_telp' => 'required|numeric|min_digits:10|max_digits:15',
            'alamat' => 'required|string',
            'keperluan_kunjungan_id' => 'required|exists:App\Models\KeperluanKunjungan,id',
            'pesan' => 'required|string'
        ]);

        Tamu::create($validated);
        return redirect('/')->with('success','Berhasil Menulis ke Daftar Tamu');
    }

    public function view($id)
    {
        $tamu = Tamu::where('id', $id)->firstOrFail();
        return view('dashboard.view', compact('tamu'));
    }

    public function destroy($id)
    {
        Tamu::destroy($id);
        return redirect('/dashboard')->with('success','Berhasil Menghapus Data Tamu');
    }
}

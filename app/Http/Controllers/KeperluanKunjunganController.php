<?php

namespace App\Http\Controllers;

use App\Models\KeperluanKunjungan;
use Illuminate\Http\Request;

class KeperluanKunjunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.keperluan-kunjungan.index',[
            'keperluan_kunjungans' => KeperluanKunjungan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.keperluan-kunjungan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        KeperluanKunjungan::create($request->validate([
            'keperluan' => 'required|string|unique:keperluan_kunjungan,keperluan'
        ]));

        return redirect()->route('keperluan-kunjungan.index')->with('success', 'Berhasil Menambahkan Data Keperluan Kunjungan');
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
        return view('dashboard.keperluan-kunjungan.edit', [
            'keperluan_kunjungan' => KeperluanKunjungan::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        KeperluanKunjungan::findOrFail($id)->update($request->validate([
            'keperluan' => 'required|string|unique:keperluan_kunjungan,keperluan,'.$id.',id'
        ]));

        return redirect()->route('keperluan-kunjungan.index')->with('success', 'Berhasil Mengubah Data Keperluan Kunjungan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        KeperluanKunjungan::destroy($id);
        return redirect()->route('keperluan-kunjungan.index')->with('success', 'Berhasil Menghapus Data Keperluan Kunjungan');
    }
}

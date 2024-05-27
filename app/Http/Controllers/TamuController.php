<?php

namespace App\Http\Controllers;

use App\Models\KeperluanKunjungan;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index()
    {
        $keperluan_kunjungans = KeperluanKunjungan::getAllKeperluanKunjungan();
        return view('test', compact('keperluan_kunjungans'));
    }

    public function store(Request $request)
    {
       dd($request->all());
    }
}

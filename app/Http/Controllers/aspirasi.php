<?php

namespace App\Http\Controllers;

use App\aspirasi
use Illuminate\Http\Request;

class aspirasi extends Controller
{
    public function index()
    {
        $aspirasi = aspirasi::latest()->paginate(6);
        return view('aspirasi.index', compact('aspirasi'))->with('i', (request()->input('page', 1) - 1) * 6);
    }

    public function create()
    {
        return view('kesehatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'Deskripsi_aspirasi' => 'required',
        ]);
        aspirasi::create($request->all());
        return redirect()->route('aspirasi.index')->with('success', 'Data berhasil di input');
    }

    public function show(aspirasi $aspirasi)
    {
        return view('aspirasi.show', compact('aspirasi'));
    }
}
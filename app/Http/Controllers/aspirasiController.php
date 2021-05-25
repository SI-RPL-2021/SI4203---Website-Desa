<?php

namespace App\Http\Controllers;

use App\aspirasi;
use Illuminate\Http\Request;

class aspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = aspirasi::latest()->paginate(6);
        return view('aspirasi.create', compact('aspirasi'))->with('i', (request()->input('page', 1) - 1) * 6);
    }

    public function create()
    {
        return view('aspirasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'Deskripsi' => 'required',
        ]);
        aspirasi::create($request->all());
        return redirect()->route('aspirasi.index')->with('success', 'Data berhasil di input');
    }

    public function show(aspirasi $aspirasi)
    {
        return view('aspirasi.show', compact('aspirasi'));
    }
}
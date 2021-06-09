<?php

namespace App\Http\Controllers;

use App\aspirasi;
use Illuminate\Http\Request;

class aspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = aspirasi::latest()->paginate(6);
        return view('aspirasi.index', compact('aspirasi'))->with('i', (request()->input('page', 1) - 1) * 6);
    }

    public function create()
    {
        return view('aspirasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'Deskripsi' => 'required',
        ]);
        aspirasi::create($request->all());
        return redirect()->route('aspirasi.index')->with('success', 'Aspirasi berhasil terecord');
    }

    public function show(aspirasi $aspirasi)
    {
        return view('aspirasi.show', compact('aspirasi'));
    }

    public function delete(aspirasi $aspirasi)
    {
        $aspirasi->delete();
        return redirect()->route('aspirasi.index')->with('success', 'aspirasi berhasil dihapus');
    }
}
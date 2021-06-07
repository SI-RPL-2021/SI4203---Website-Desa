<?php

namespace App\Http\Controllers;

use App\pengaduan;
use Illuminate\Http\Request;

class pengaduanController extends Controller
{
    public function index()
    {
        $aspirasi = pengaduan::latest()->paginate(6);
        return view('pengaduan.index', compact('pengaduan'))->with('i', (request()->input('page', 1) - 1) * 6);
    }

    public function create()
    {
        return view('pengaduan.create');
    }

    public function store(Request $request)
    {
        $img_path = time() . '.' . $req->img_path->extension();
        $req->img_path->move(public_path('images/upload'), $img_path);
        
        $request->validate([
            'Nama' => 'required',
            'masalah' => 'required',
            'bukti' => 'required',
            'keterangan' => 'required',
        ]);
        aspirasi::create($request->all());
        return redirect()->route('keterangan.index')->with('success', 'Pengaduan Anda Terkirim');
    }

    public function show(pengaduan $pengaduan)
    {
        return view('pengaduan.show', compact('pengaduan'));
    }

    public function delete(pengaduan $pengaduan)
    {
        $pengaduan->delete();
        return redirect()->route('pengaduan.index')->with('success', 'pengaduan berhasil dihapus');
    }
}
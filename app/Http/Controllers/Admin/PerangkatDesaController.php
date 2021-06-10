<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PerangkatDesa;
use Alert;

class PerangkatDesaController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $peoples = PerangkatDesa::all();
        return view('admin.perangkat_desa.index', compact('peoples'));
    }

    public function create()
    {
        return view('admin.perangkat_desa.create');
    }

    public function store(Request $request)
    {
        $perangkatDesa = new PerangkatDesa();
        $perangkatDesa->nama = $request->nama;
        $perangkatDesa->nip = $request->nip;
        $perangkatDesa->jabatan = $request->jabatan;
        $perangkatDesa->telepon = $request->telepon;
        $perangkatDesa->save();
        Alert::success('Berhasil', 'Perangkat Desa berhasil ditambahkan!');
        return redirect('/admin/perangkatdesa');
    }

    public function edit($perangkat_desa)
    {
        $perangkatDesa = PerangkatDesa::find($perangkat_desa);
        return view('admin.perangkat_desa.edit', compact('perangkatDesa'));
    }

    public function update(Request $request, $perangkat_desa)
    {
        $perangkatDesa = PerangkatDesa::find($perangkat_desa);
        $perangkatDesa->nama = $request->nama;
        $perangkatDesa->nip = $request->nip;
        $perangkatDesa->jabatan = $request->jabatan;
        $perangkatDesa->telepon = $request->telepon;
        $perangkatDesa->save();
        Alert::success('Berhasil', 'Data Perangkat Desa berhasil diupdate!');
        return redirect('/admin/perangkatdesa');
    }

    public function destroy($perangkat_desa)
    {
        PerangkatDesa::destroy($perangkat_desa);
        Alert::success('Berhasil', 'Perangkat Desa berhasil dihapus!');
        return redirect('/admin/perangkatdesa');
    }
}
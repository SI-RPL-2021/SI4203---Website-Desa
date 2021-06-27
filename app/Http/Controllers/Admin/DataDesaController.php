<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\DataDesa;

class DataDesaController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        $dataDesa = DataDesa::find(1);

        return view('admin.datadesa.index', compact('dataDesa'));
    }

    public function edit($datadesa)
    {
        $dataDesa = DataDesa::find($datadesa);

        return view('admin.datadesa.edit', compact('dataDesa'));
    }

    public function update(Request $request, $datadesa)
    {
        $dataDesa = DataDesa::find($datadesa);
        $dataDesa->jumlah_penduduk = $request->jumlah_penduduk;
        $dataDesa->jumlah_kk = $request->jumlah_kk;
        $dataDesa->jumlah_penduduk_laki = $request->jumlah_penduduk_laki;
        $dataDesa->jumlah_penduduk_wanita = $request->jumlah_penduduk_wanita;
        $dataDesa->luas_area = $request->luas_area;
        $dataDesa->save();
        Alert::success('Berhasil!', 'Data desa berhasil di update!');
        return redirect('/admin/datadesa');
    }
}

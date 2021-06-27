<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
use App\KeuanganDesa;
use Illuminate\Support\Facades\Storage;

class KeuanganDesaController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        $financeDatas = KeuanganDesa::all();
        return view('admin.keuangandesa.index', compact('financeDatas'));
    }

    public function create()
    {
        return view('admin.keuangandesa.create');
    }

    public function store(Request $request)
    {

        $financeData = new KeuanganDesa;
        $file = Storage::disk('public')->put('keuangan_desa', $request->file);
        $financeData->judul = $request->judul;
        $financeData->tanggal = $request->tanggal;
        $financeData->file = $file;
        $financeData->save();

        Alert::success('Berhasil', 'Data keuangan sudah ditambahkan!');
        return redirect('/admin/keuangandesa');
    }

    public function edit($keuangandesa)
    {
        $financeData = KeuanganDesa::find($keuangandesa);
        return view('admin.keuangandesa.edit', compact('financeData'));
    }

    public function update($keuangandesa, Request $request)
    {
        $financeData = KeuanganDesa::find($keuangandesa);
        if ($request->file) {
            $file = Storage::disk('public')->put('keuangan_desa', $request->file);
            $financeData->file = $file;
        }
        $financeData->judul = $request->judul;
        $financeData->tanggal = $request->tanggal;
        $financeData->save();

        Alert::success('Berhasil', 'Data keuangan sudah diupdate!');
        return redirect('/admin/keuangandesa');
    }

    public function destroy($keuangandesa)
    {
        KeuanganDesa::destroy($keuangandesa);
        Alert::success('Berhasil', 'Data keuangan sudah dihapus!');
        return redirecT('/admin/keuangandesa');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\KegiatanDesa;
use Alert;
use Illuminate\Support\Facades\Storage;

class KegiatanDesaController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        $activities = KegiatanDesa::all();
        return view('admin.kegiatandesa.index', compact('activities'));
    }

    public function create()
    {
        return view('admin.kegiatandesa.create');
    }

    public function store(Request $request)
    {
        $kegiatanDesa = new KegiatanDesa();
        $kegiatanDesa->nama = $request->nama;
        $kegiatanDesa->tanggal = $request->tanggal;
        $kegiatanDesa->deskripsi = $request->deskripsi;
        $kegiatanDesa->waktu = $request->waktu;
        $kegiatanDesa->lembaga = $request->lembaga;

        if ($request->image) {

            $image = Storage::disk('public')->put('kegiatan_desa', $request->image);
            $kegiatanDesa->gambar = $image;
        }

        $kegiatanDesa->save();

        Alert::success('Berhasil', 'Kegiatan Desa telah di tambahkan!');
        return redirect('/admin/kegiatandesa');
    }

    public function edit($kegiatandesa)
    {
        $kegiatanDesa = KegiatanDesa::find($kegiatandesa);
        return view('admin.kegiatandesa.edit', compact('kegiatanDesa'));
    }

    public function update(Request $request, $kegiatandesa)
    {
        $kegiatanDesa = KegiatanDesa::findOrFail($kegiatandesa);
        if ($request->image) {
            $image = Storage::disk('public')->put('kegiatandesa', $request->image);
            $kegiatanDesa->gambar = $image;
        }

        $kegiatanDesa->nama = $request->nama;
        $kegiatanDesa->tanggal = $request->tanggal;
        $kegiatanDesa->deskripsi = $request->deskripsi;
        $kegiatanDesa->waktu = $request->waktu;
        $kegiatanDesa->lembaga = $request->lembaga;
        $kegiatanDesa->save();
        Alert::success('Berhasil', 'Kegiatan Desa telah di update!');
        return redirect('/admin/kegiatandesa');
    }

    public function destroy($kegiatandesa)
    {
        KegiatanDesa::destroy($kegiatandesa);
        Alert::success('Berhasil', 'Kegiatan Desa telah dihapus!');
        return redirect('/admin/kegiatandesa');
    }
}

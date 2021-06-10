<?php

namespace App\Http\Controllers;

use App\Suratonline;
use Illuminate\Http\Request;

class SuratonlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suratonline = Suratonline::latest()->paginate(5);
        return view('suratonline.index', compact('suratonline'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suratonline.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'NoIdentitas' => 'required',
            'name' => 'required',
            'email' => 'required',
            'NoHP' => 'required',
            'jenis' => 'required',
            'Alamat' => 'required',
            'pesan' => 'required',
        ]);
        Suratonline::create($request->all());
        return redirect()->route('suratonline.index')->with('success', 'Data berhasil di input');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Suratonline  $suratonline
     * @return \Illuminate\Http\Response
     */
    public function show(Suratonline $suratonline)
    {
        return view('suratonline.show', compact('suratonline'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suratonline  $suratonline
     * @return \Illuminate\Http\Response
     */
    public function edit(Suratonline $suratonline)
    {
        return view('suratonline.edit', compact('suratonline'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suratonline  $suratonline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suratonline $suratonline)
    {
        $request->validate([
            'NoIdentitas' => 'required',
            'name' => 'required',
            'email' => 'required',
            'NoHP' => 'required',
            'jenis' => 'required',
            'Alamat' => 'required',
            'pesan' => 'required',
        ]);
        $suratonline->update($request->all());
        return redirect()->route('suratonline.index')->with('success', 'Surat Online berhasil di update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suratonline  $suratonline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suratonline $suratonline)
    {
        $suratonline->delete();
        return redirect()->route('suratonline.index')->with('success', 'Surat Online berhasil dihapus');
    }
}

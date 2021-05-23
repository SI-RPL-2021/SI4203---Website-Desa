<?php

namespace App\Http\Controllers;

use App\Kesehatan;
use Illuminate\Http\Request;

class kesehatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kesehatan = Kesehatan::latest()->paginate(5);
        return view('kesehatan.index', compact('kesehatan'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kesehatan.create');
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
            'NoHP' => 'required',
            'Alamat' => 'required',
            'Keluhan' => 'required',
        ]);
        Kesehatan::create($request->all());
        return redirect()->route('kesehatan.index')->with('success', 'Data berhasil di input');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kesehatan $kesehatan)
    {
        return view('kesehatan.show', compact('kesehatan'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kesehatan $kesehatan)
    {
        return view('kesehatan.edit', compact('kesehatan'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kesehatan $kesehatan)
    {
        $request->validate([
            'NoIdentitas' => 'required',
            'name' => 'required',
            'NoHP' => 'required',
            'Alamat' => 'required',
            'Keluhan' => 'required',
        ]);
        $kesehatan->update($request->all());
        return redirect()->route('kesehatan.index')->with('success', 'kesehatan berhasil di update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kesehatan  $kesehatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kesehatan $kesehatan)
    {
        $kesehatan->delete();
        return redirect()->route('kesehatan.index')->with('success', 'Kesehatan berhasil dihapus');
    }
}

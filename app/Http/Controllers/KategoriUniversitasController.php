<?php

namespace App\Http\Controllers;

use App\KategoriUniversitas;
use Illuminate\Http\Request;

class KategoriUniversitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriuniv = KategoriUniversitas::all();
        return view('kategori_universitas.index', compact('kategoriuniv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_universitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategoriuniv = new KategoriUniversitas;
        $kategoriuniv->id_kategori_univ = $request->input('id_kategori_univ');
        $kategoriuniv->nama_universitas = $request->input('nama_universitas');
        $kategoriuniv->save();

        return redirect('/kategori_universitas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KategoriUniversitas  $kategoriUniversitas
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriUniversitas $kategoriUniversitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KategoriUniversitas  $kategoriUniversitas
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriUniversitas $kategoriUniversitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KategoriUniversitas  $kategoriUniversitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriUniversitas $kategoriUniversitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KategoriUniversitas  $kategoriUniversitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriUniversitas $kategoriUniversitas)
    {
        //
    }
}

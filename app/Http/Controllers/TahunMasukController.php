<?php

namespace App\Http\Controllers;

use App\TahunMasuk;
use Illuminate\Http\Request;

class TahunMasukController extends Controller
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
        $tahunmasuk = TahunMasuk::all();
        return view('tahun_masuk.index', compact('tahunmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tahun_masuk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tahunmasuk = new TahunMasuk;
        $tahunmasuk->id_tahun_masuk = $request->input('id_tahun_masuk');
        $tahunmasuk->tahun_masuk = $request->input('tahun_masuk');
        $tahunmasuk->save();

        return redirect('/tahun_masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TahunMasuk  $tahunMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(TahunMasuk $tahunMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TahunMasuk  $tahunMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(TahunMasuk $tahunMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TahunMasuk  $tahunMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TahunMasuk $tahunMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TahunMasuk  $tahunMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(TahunMasuk $tahunMasuk)
    {
        //
    }
}

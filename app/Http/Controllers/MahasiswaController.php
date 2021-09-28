<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\KategoriUniversitas;
use App\TahunMasuk;
use Image;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class MahasiswaController extends Controller
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
        $kategoriuniv = KategoriUniversitas::all();
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa','kategoriuniv','tahunmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tahunmasuk = TahunMasuk::all();
        $kategoriuniv = KategoriUniversitas::all();
        return view('mahasiswa.create', compact('kategoriuniv','tahunmasuk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->id_mahasiswa = $request->input('id_mahasiswa');
        $mahasiswa->nama_mahasiswa = $request->input('nama_mahasiswa');
        $mahasiswa->npm = $request->input('npm');
        $mahasiswa->jurusan = $request->input('jurusan');
        $mahasiswa->fakultas = $request->input('fakultas'); 
        $mahasiswa->id_kategori_univ = $request->input('id_kategori_univ');
        $mahasiswa->id_tahun_masuk = $request->input('id_tahun_masuk');
        $mahasiswa->tempat_lahir = $request->input('tempat_lahir'); 
        $mahasiswa->tanggal_lahir = $request->input('tanggal_lahir');
        $mahasiswa->jenis_kelamin = $request->input('jenis_kelamin');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->no_telepon = $request->input('no_telepon');
        $mahasiswa->email = $request->input('email');
        $mahasiswa->nama_sekolah = $request->input('nama_sekolah');
        $mahasiswa->foto = $request->input('foto');
        if($mahasiswa->save()){
            $photo = $request->file('image');
            if($photo != null){
                $ext = $photo->getClientOriginalExtension();
                $fileName = rand(10000, 50000).'.'.$ext;
                if($ext == 'jpg'|| $ext == 'png'){
                    if($photo->move(public_path(), $fileName)){
                        $mahasiswa = Mahasiswa::find($mahasiswa->id_mahasiswa);
                        $mahasiswa->foto = url('/').'/'.$fileName;
                        $mahasiswa->save();
                    }
                }
            }
            
            return redirect('/mahasiswa');
        }
        return redirect()->back();
        // $mahasiswa->save($request->all());
        // return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id_mahasiswa)
    {
        $mahasiswa = Mahasiswa::find($id_mahasiswa);
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $request, $id_mahasiswa)
    {
        $tahunmasuk = TahunMasuk::all();
        $kategoriuniv = KategoriUniversitas::all();
        $mahasiswa = Mahasiswa::where('id_mahasiswa',$id_mahasiswa)->first();
        return view('mahasiswa.edit', compact('mahasiswa','kategoriuniv','tahunmasuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_mahasiswa)
    {
        $mahasiswa = Mahasiswa::find($id_mahasiswa);
        $mahasiswa->nama_mahasiswa = $request->input('nama_mahasiswa');
        $mahasiswa->npm = $request->input('npm');
        $mahasiswa->jurusan = $request->input('jurusan');
        $mahasiswa->fakultas = $request->input('fakultas'); 
        $mahasiswa->id_kategori_univ = $request->input('id_kategori_univ');
        $mahasiswa->id_tahun_masuk = $request->input('id_tahun_masuk');
        $mahasiswa->tempat_lahir = $request->input('tempat_lahir'); 
        $mahasiswa->tanggal_lahir = $request->input('tanggal_lahir');
        $mahasiswa->jenis_kelamin = $request->input('jenis_kelamin');
        $mahasiswa->alamat = $request->input('alamat');
        $mahasiswa->no_telepon = $request->input('no_telepon');
        $mahasiswa->email = $request->input('email');
        $mahasiswa->nama_sekolah = $request->input('nama_sekolah');
        $mahasiswa->foto = $request->input('foto');
        if($mahasiswa->save()){
            $photo = $request->file('foto');
            if($photo != null){
                $ext = $photo->getClientOriginalExtension();
                $fileName = rand(10000, 50000).'.'.$ext;
                if($ext == 'jpg'|| $ext == 'png'){
                    if($photo->move(public_path(), $fileName)){
                        $mahasiswa = Mahasiswa::find($mahasiswa->id_mahasiswa);
                        $mahasiswa->foto = url('/').'/'.$fileName;
                        $mahasiswa->update();
                    }
                }
            }
            
            return redirect('/mahasiswa');
        }
        return redirect()->back();

        // $mahasiswa->update();

        // return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_mahasiswa)
    {
        $mahasiswa = Mahasiswa::find($id_mahasiswa);
        $mahasiswa-> delete();
        return redirect('/mahasiswa');
    }
}

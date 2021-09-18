@extends('layouts.master')

@section('title')
   Create Mahasiswa
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Mahasiswa</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title"></h2>
            <p class="section-lead">
              Halaman Tambah Data Mahasiswa Ponpes Perkemas
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <form method="post" action="{{route('mahasiswa.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h4>Mahasiswa</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Mahasiswa</label>
                                    <input type="text" name="nama_mahasiswa" class="form-control" required="" placeholder="Masukkan nama">
                                </div>
                                <div class="form-group">
                                    <label>NPM</label>
                                    <input type="text" name="npm" class="form-control" required="" placeholder="Masukkan NPM">
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input name="jurusan" type="text" class="form-control" required="" placeholder="Masukkan Jurusan">
                                </div>
                                <div class="form-group">
                                    <label>Fakultas</label>
                                    <input name="fakultas" type="text" class="form-control" required="" placeholder="Masukkan Fakultas">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input name="tempat_lahir" type="text" class="form-control" required="" placeholder="Masukkan Tempat Lahir">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input name="tanggal_lahir" type="date" class="form-control" required="" placeholder="Masukkan Tanggal Lahir">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select  name="jenis_kelamin" class="form-control">
                                        <option >--Pilih--</option>
                                        <option name="laki-laki">Laki-Laki</option>
                                        <option name="perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control" required="" placeholder="Masukkan Alamat">
                                </div>
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <input type="text" name="no_telepon" class="form-control" required="" placeholder="Masukkan No Telp">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required="" placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                    <label>Nama Sekolah</label>
                                    <input type="text" name="nama_sekolah" class="form-control" required="" placeholder="Masukkan Nama Sekolah">
                                </div>
                                <div class="form-group">
                                    <label>Nama Universitas</label>
                                    <input type="text" name="nama_universitas" class="form-control" required="" placeholder="Masukkan Nama Universitas">
                                </div>
                                <!-- <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="image" class="form-control" onchange="loadPhoto(event)">
                                </div>
                                <div class="form group">
                                    <img id="photo" width="100" height="100" >
                                </div>
                                <br> -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
<script>
    function loadPhoto(event){
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('photo');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
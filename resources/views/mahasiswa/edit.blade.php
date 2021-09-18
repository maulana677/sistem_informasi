@extends('layouts.master')

@section('title')
   Update Mahasiswa
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Mahasiswa</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Mahasiswa</h2>
            <p class="section-lead">
              Halaman Edit Data Mahasiswa
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->id_mahasiswa) }}">
                            @csrf
                            @method('put')
                            <div class="card-header">
                                <h4>Mahasiswa</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Mahasiswa</label>
                                    <input type="text" name="nama_mahasiswa" value="{{$mahasiswa->nama_mahasiswa}}" class="form-control" required="" placeholder="Masukkan nama">
                                </div>
                                <div class="form-group">
                                    <label>NPM</label>
                                    <input type="text" name="npm" value="{{$mahasiswa->npm}}" class="form-control" required="" placeholder="Masukkan NPM">
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <input type="text" name="jurusan" value="{{$mahasiswa->jurusan}}" class="form-control" required="" placeholder="Masukkan Jurusan">
                                </div>
                                <div class="form-group">
                                    <label>Fakultas</label>
                                    <input type="text" name="fakultas" value="{{$mahasiswa->fakultas}}" class="form-control" required="" placeholder="Masukkan Fakultas">
                                </div>
                                <div class="form-group">
                                    <label>Nama Universitas</label>
                                    <select name="id_kategori_univ" class="form-control">
                                        <option >--Pilih--</option>
                                        @foreach($kategoriuniv as $item)
                                            <option value="{{ $item->id_kategori_univ}}" 
                                                @if($item->id_kategori_univ == $mahasiswa->id_kategori_univ)
                                                    selected
                                                @endif
                                                >{{$item->nama_universitas}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tahun Masuk</label>
                                    <select name="id_tahun_masuk" class="form-control">
                                        <option >--Pilih--</option>
                                        @foreach ($tahunmasuk as $item)
                                            <option value="{{ $item->id_tahun_masuk}}"
                                                @if($item->id_tahun_masuk == $mahasiswa->id_tahun_masuk)
                                                    selected
                                                @endif
                                                >{{ $item->tahun_masuk}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" value="{{$mahasiswa->tempat_lahir}}" class="form-control" required="" placeholder="Masukkan Tempat Lahir">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}" class="form-control" required="" placeholder="Masukkan Tanggal Lahir">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" value="{{$mahasiswa->jenis_kelamin}}" class="form-control">
                                        <option >--Pilih--</option>
                                        <option value="laki-laki" <?php if($mahasiswa->jenis_kelamin=='laki-laki'){ echo "selected"; } ?>>Laki-Laki</option>
                                        <option value="perempuan" <?php if($mahasiswa->jenis_kelamin=='perempuan'){ echo "selected"; } ?>>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" value="{{$mahasiswa->alamat}}" class="form-control" required="" placeholder="Masukkan Alamat">
                                </div>
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <input type="text" name="no_telepon" value="{{$mahasiswa->no_telepon}}" class="form-control" required="" placeholder="Masukkan No Telp">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{$mahasiswa->email}}" class="form-control" required="" placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                    <label>Nama Sekolah</label>
                                    <input type="text" name="nama_sekolah" value="{{$mahasiswa->nama_sekolah}}" class="form-control" required="" placeholder="Masukkan Nama Sekolah">
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="image" class="form-control" onchange="loadPhoto(event)">
                                </div>
                                <div class="form group">
                                    <img src="{{asset ($mahasiswa->foto)}}" width="100" height="100">
                                </div>
                                <br>
                                <div>
                                    <button type="submit" class="btn btn-warning">Update</button>
                                    <a class="btn btn-primary" href="/mahasiswa">Batal</a>
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

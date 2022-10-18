@extends('layouts.master')

@section('title')
    Kategori Fakultas
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kategori Fakultas</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Kategoriiii Fakultas</h2>
            <p class="section-lead">
              Halaman Data Kategori Fakultas
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <a href="{{ route('mahasiswa.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                   
                                        <tr>
                                            <th>No</th>
                                            <th>nama_mahasiswa</th>
                                            <th>NPM</th>
                                            <th>Jurusan</th>
                                            <th>Fakultas</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>Email</th>
                                            <th>Nama Sekolah</th>
                                            <th>Nama Universitas</th>
                                            <th>Aksi</th>
                                        </tr>
                                   
                                        @forelse ($mahasiswa as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$data->nama_mahasiswa}}</td>
                                            <td>{{$data->npm}}</td>
                                            <td>{{$data->jurusan}}</td>
                                            <td>{{$data->fakultas}}</td>
                                            <td>{{$data->tempat_lahir}}</td>
                                            <td>{{$data->tanggal_lahir}}</td>
                                            <td>{{$data->jenis_kelamin}}</td>
                                            <td>{{$data->alamat}}</td>
                                            <td>{{$data->no_telepon}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->nama_sekolah}}</td>
                                            <td>{{$data->nama_universitas}}</td>
                                            
                                            <td>
                                                <a href="#" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="14" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse
                                  
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
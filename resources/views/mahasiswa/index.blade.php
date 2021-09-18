@extends('layouts.master')

@section('title')
    Mahasiswa
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Mahasiswa</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Mahasiswa</h2>
            <p class="section-lead">
              Halaman Data Mahasiswa
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <a href="{{ route('mahasiswa.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table_mahasiswa">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>NPM</th>
                                            <th>Jurusan</th>
                                            <th>Fakultas</th>
                                            <th>Nama Universitas</th>
                                            <th>Tahun Masuk</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>Email</th>
                                            <th>Nama Sekolah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   
                                        @forelse ($mahasiswa as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{asset ($data->foto)}}" width="100" height="100">
                                            </td>
                                            <td>{{$data->nama_mahasiswa}}</td>
                                            <td>{{$data->npm}}</td>
                                            <td>{{$data->jurusan}}</td>
                                            <td>{{$data->fakultas}}</td>
                                            <td>{{$data->kategoriuniversitas->nama_universitas}}</td>
                                            <td>{{$data->tahunmasuk->tahun_masuk}}</td>
                                            <td>{{$data->tempat_lahir}}</td>
                                            <td>{{$data->tanggal_lahir}}</td>
                                            <td>{{$data->jenis_kelamin}}</td>
                                            <td>{{$data->alamat}}</td>
                                            <td>{{$data->no_telepon}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->nama_sekolah}}</td>
                                            
                                            <td>
                                                <a href="{{route('mahasiswa.show', $data->id_mahasiswa)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('mahasiswa.edit', $data->id_mahasiswa)}}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                <a href="{{route('mahasiswa.destroy', $data->id_mahasiswa)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="18" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse
                                  
                                    </tbody>
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

@push('scripts')
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_mahasiswa').DataTable();
        } );
    </script>

@endpush
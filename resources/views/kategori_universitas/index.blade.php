@extends('layouts.master')

@section('title')
    Kategori Universitas
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kategori Universitas</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Kategori Universitas</h2>
            <p class="section-lead">
              Halaman Data Kategori Universitas
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <a href="{{ route('kategori_universitas.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table_kategori_univ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Universitas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($kategoriuniv as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$data->nama_universitas}}</td>
                                            <td>
                                                <a href="{{route('kategori_universitas.edit', $data->id_kategori_univ)}}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                <a href="{{route('kategori_universitas.destroy', $data->id_kategori_univ)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
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
            $('#table_kategori_univ').DataTable();
        } );
    </script>

@endpush
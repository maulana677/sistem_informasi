@extends('layouts.master')

@section('title')
    Tahun Masuk
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tahun Masuk</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Tahun Masuk</h2>
            <p class="section-lead">
              Halaman Data Tahun Masuk
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <a href="{{ route('tahun_masuk.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="id_table_tahun">
                                   <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun Masuk</th>
                                            <th>Aksi</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @forelse ($tahunmasuk as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$data->tahun_masuk}}</td>
                                            <td>
                                                <a href="{{route('tahun_masuk.edit', $data->id_tahun_masuk)}}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                <a href="{{route('tahun_masuk.destroy', $data->id_tahun_masuk)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
            $('#id_table_tahun').DataTable();
        } );
    </script>

@endpush
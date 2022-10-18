@extends('layouts.master')

@section('title')
    Manajemen User
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manajemen User</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Manajemen User</h2>
            <p class="section-lead">
              Halaman Data Manajemen User
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <a href="{{ route('user.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table_user">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama User</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   
                                        @forelse ($user as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>
                                                <h5><span class="badge badge-primary">{{$data->level}}</span></h5></td>
                                            <td>
                                                <a href="{{route('user.show', $data->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('user.edit', $data->id)}}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                <a href="{{route('user.destroy', $data->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
            $('#table_user').DataTable();
        } );
    </script>

@endpush
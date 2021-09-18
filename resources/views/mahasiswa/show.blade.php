@extends('layouts.master')

@section('title', 'Detail Mahasiswa')

@section('content')

    <div class="main-content">
        <section class="section">
            <div class="card" style="width:100%;">
                <div class="card-body">
                    <h3 class="card-title text-uppercase" style="color: black;">Detail Mahasiswa — {{ $mahasiswa->nama_mahasiswa }} </h3>
                    <hr>
                    <p class="card-text"> Berikut adalah detail mahasiswa dari mahasiswa yang bernama {{$mahasiswa->nama_mahasiswa}}. Detail
                        meliputi Nama Mahasiswa, Email, Level, Password.
                    </p>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Mahasiswa</h2>
                <p class="section-lead">
                Halaman Detail mahasiswa
                </p>
                <div class="row">
                    <div class="col-12 ">
                        <div class="card card-primary">
                        <div class="col-md-12 text-center">
                            <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                                Detail Data Mahasiswa</p>
                            <p style="line-height:-30px;margin-top:-20px;">Berikut adalah data mahasiswa dari {{ $mahasiswa->nama_mahasiswa }} </p>
                            <hr>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="form-group col-md-12">
                                        
                                    </div>
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <th>Nama Mahasiswa</th>
                                                <td>{{ $mahasiswa->nama_mahasiswa}}</td>
                                            </tr>
                                            <tr>
                                                <th>NPM</th>
                                                <td>{{ $mahasiswa->npm }}</td>
                                            </tr>
                                            <tr>
                                                <th>Jurusan</th>
                                                <td>{{ $mahasiswa->jurusan }}</td>
                                            </tr>
                                            <tr>
                                                <th>Fakultas</th>
                                                <td>{{ $mahasiswa->fakultas }}</td>
                                            </tr>
                                            <tr>
                                                <th>Level</th>
                                                <td>{{ $mahasiswa->jurusan }}</td>
                                            </tr>
                                            <tr>
                                                <th>Universitas</th>
                                                <td>{{ $mahasiswa->kategoriuniversitas->nama_universitas }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tahun Masuk</th>
                                                <td>{{ $mahasiswa->tahunmasuk->tahun_masuk }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tempat Lahir</th>
                                                <td>{{ $mahasiswa->tempat_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Lahir</th>
                                                <td>{{ $mahasiswa->tanggal_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Kelamin</th>
                                                <td>{{ $mahasiswa->jenis_kelamin }}</td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td>{{ $mahasiswa->alamat}}</td>
                                            </tr>
                                            <tr>
                                                <th>No Telp</th>
                                                <td>{{ $mahasiswa->no_telepon }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{ $mahasiswa->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nama Sekolah</th>
                                                <td>{{ $mahasiswa->nama_sekolah }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="{{url('/mahasiswa')}}" class="btn btn-primary">Kembali </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
@endsection
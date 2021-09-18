@extends('layouts.master')

@section('title', 'Detail User')

@section('content')

    <div class="main-content">
        <section class="section">
            <div class="card" style="width:100%;">
                <div class="card-body">
                    <h3 class="card-title text-uppercase" style="color: black;">Detail User — {{ $user->name }} </h3>
                    <hr>
                    <p class="card-text"> Berikut adalah detail User dari User yang bernama {{$user->name}}. Detail
                        meliputi Nama User, Email, Level, Password.
                    </p>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">User</h2>
                <p class="section-lead">
                Halaman Detail User
                </p>
                <div class="row">
                    <div class="col-12 ">
                        <div class="card card-primary">
                        <div class="col-md-12 text-center">
                            <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                                Detail Data User</p>
                            <p style="line-height:-30px;margin-top:-20px;">Berikut adalah data user dari {{ $user->name }} </p>
                            <hr>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="form-group col-md-12">
                                        
                                    </div>
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            <tr>
                                                <th>Nama User</th>
                                                <td>{{ $user->name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{ $user->email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Level</th>
                                                <td>{{ $user->level }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="{{url('/user')}}" class="btn btn-primary">Kembali </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
@endsection
@extends('layouts.master')

@section('title')
   Create Manajemen User
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah User</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">User</h2>
            <p class="section-lead">
              Halaman Tambah Data User
            </p>
            <div class="row">
                <div class="col-8">
                    <div class="card card-primary">
                        <form method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h4>User</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama User</label>
                                    <input type="text" name="name" class="form-control" required="" placeholder="Masukkan Nama">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" required="" placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    <div class="form-check">
                                        <input type="radio" name="level" class="form-check-input" value="operator" checked>
                                        <label class="form-check-label" for="level">Operator</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="level" class="form-check-input" value="admin">
                                        <label class="form-check-label" for="level">Admin</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" for="password" class="form-control" required="" placeholder="Masukkan Password">
                                </div>
                                <div class="form-group">
                                    <label>Password Confirmation</label>
                                    <input type="password" name="password_confirmation" for="password_confirmation" class="form-control" required="" placeholder="Masukkan Password Confirm">
                                </div>
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
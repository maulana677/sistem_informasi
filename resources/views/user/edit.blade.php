@extends('layouts.master')

@section('title')
   Update Manajemen User
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit User</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">User</h2>
            <p class="section-lead">
              Halaman Edit Data User
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <form method="post" action="{{ route('user.update', $user->id) }}">
                            @csrf
                            @method('put')
                            <div class="card-header">
                                <h4>Mahasiswa</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama User</label>
                                    <input type="text" name="name" value="{{$user->name}}" class="form-control" required="" placeholder="Masukkan nama">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" value="{{$user->email}}" class="form-control" required="" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    <div class="form-check">
                                        <input type="radio" name="level" class="form-check-input" value="operator"
                                        @if($user->level == 'operator')
                                            checked
                                        @endif >
                                        <label class="form-check-label" for="level">Operator</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="level" class="form-check-input" value="admin"
                                        @if($user->level == 'admin')
                                            checked
                                        @endif >
                                        <label class="form-check-label" for="level">Admin</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                                    <label>*) Jika Password tidak diganti, kosongkan saja</label>
                                </div>
                                <div class="form-group">
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

@extends('layouts.master')

@section('title')
   Create Tahun Masuk
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Tahun Masuk</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Tahun Masuk</h2>
            <p class="section-lead">
              Halaman Tambah Data Tahun Masuk
            </p>
            <div class="row">
                <div class="col-8">
                    <div class="card card-primary">
                        <form method="post" action="{{route('tahun_masuk.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h4>Tahun Masuk</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tahun Masuk</label>
                                    <input type="text" name="tahun_masuk" class="form-control" required="" placeholder="Masukkan tahun">
                                    <br>
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
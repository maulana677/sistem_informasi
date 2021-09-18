@extends('layouts.master')

@section('title')
   Create Universitas
@endsection

@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Universitas</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Universitas</h2>
            <p class="section-lead">
              Halaman Tambah Data Universitas
            </p>
            <div class="row">
                <div class="col-8">
                    <div class="card card-primary">
                        <form method="post" action="{{route('kategori_universitas.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h4>Kategori Universitas</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Universitas</label>
                                    <input type="text" name="nama_universitas" class="form-control" required="" placeholder="Masukkan nama kategori">
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
<script>
    function loadPhoto(event){
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('photo');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
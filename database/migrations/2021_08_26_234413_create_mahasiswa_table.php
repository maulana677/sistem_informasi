<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id('id_mahasiswa');
            $table->string('nama_mahasiswa',40);
            $table->integer('npm');
            $table->string('jurusan',50);
            $table->string('fakultas',50);
            $table->bigInteger('id_kategori_univ')->unsigned();
            $table->bigInteger('id_tahun_masuk')->unsigned();
            $table->string('tempat_lahir',40);
            $table->string('tanggal_lahir');
            $table->enum('jenis_kelamin', ['laki-laki','perempuan']);
            $table->text('alamat');
            $table->string('no_telepon', 12);
            $table->string('email');
            $table->string('nama_sekolah',40);
            $table->timestamps();
        });

        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->foreign('id_kategori_univ')->references('id_kategori_univ')->on('kategori_universitas')
                ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->foreign('id_tahun_masuk')->references('id_tahun_masuk')->on('tahun_masuk')
                ->onDelete('cascade')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}

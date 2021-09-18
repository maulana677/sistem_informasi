<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    protected $fillable = 
    [
        'id_mahasiswa',
        'nama_mahasiswa',
        'npm',
        'jurusan',
        'fakultas',
        'id_kategori_univ',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_telepon',
        'email',
        'nama_sekolah',
        'foto'
    ];

    public function kategoriuniversitas()
    {
        return $this->belongsTo('App\KategoriUniversitas', 'id_kategori_univ');
    }

    public function tahunmasuk()
    {
        return $this->belongsTo('App\TahunMasuk', 'id_tahun_masuk');
    }
}

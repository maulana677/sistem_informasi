<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriUniversitas extends Model
{
    protected $table = 'kategori_universitas';
    protected $primaryKey = 'id_kategori_univ';
    protected $fillable = 
    [
        'id_kategori_univ',
        'nama_universitas',
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}

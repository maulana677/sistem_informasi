<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunMasuk extends Model
{
    protected $table = 'tahun_masuk';
    protected $primaryKey = 'id_tahun_masuk';
    protected $fillable = 
    [
        'id_tahun_masuk',
        'tahun_masuk',
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}

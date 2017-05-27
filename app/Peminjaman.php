<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

     public function siswa()
    {
        return $this->belongsTo('App\Siswa','siswa_id');
    }
    public function buku()
    {
         return $this->belongsTo('App\Buku','buku_id');
    }
}

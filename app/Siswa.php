<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
	protected $primaryKey = 'nisn';
    public function peminjaman()
    {
         return $this->hasMany('App\Peminjaman');
    }
    public function jurusan()
    {
    	return $this->belongsTo('App\Jurusan','id_jurusan');
       
    }
}

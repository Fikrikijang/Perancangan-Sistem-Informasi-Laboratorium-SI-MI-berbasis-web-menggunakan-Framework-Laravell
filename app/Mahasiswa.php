<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Mahasiswa extends Model
{
    protected $table ='mahasiswa';
    protected $fillable = ['nama','npm','tgl_lahir','kelas','email','gambar','status'];
 
 	public function matkul(){
 		return $this->belongsToMany(Matkul::class)->withPivot(['pertemuan','nilai'])->withTimeStamps();
 	}   
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table ='matkul';
    protected $fillable = ['kode','nama','semester'];

    public function mahasiswa(){
 		return $this->belongsToMany(Mahasiswa::class)->withPivot(['pertemuan','nilai']);
 	} 
}

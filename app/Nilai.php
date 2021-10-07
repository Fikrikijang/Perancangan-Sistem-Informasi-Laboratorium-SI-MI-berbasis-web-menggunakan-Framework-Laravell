<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table ='mahasiswa_matkul';
    protected $fillable = ['mahasiswa_id','matkul_id','pertemuan','nilai'];

}

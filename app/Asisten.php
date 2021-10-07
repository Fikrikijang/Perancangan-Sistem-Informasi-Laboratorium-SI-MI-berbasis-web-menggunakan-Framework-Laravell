<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Asisten extends Model
{
    protected $table ='asisten';
    protected $fillable = ['nama','npm','tgl_lahir','email','jenis_kelamin','agama','no_hp','gambar','alamat','status','akun'];
    
    public function jadwal(){
    	return $this->hasMany('App\Jadwal');
    }

    public function getRouteKeyName()
	{
	    return 'nama';
	}
}

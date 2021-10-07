<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['kelas_pr','hari_pr','jam_pr','ruang_pr','praktikum_id'];
    
    public function praktikum(){
    	return $this->belongsTo('App\Praktikum');
    }
	
}
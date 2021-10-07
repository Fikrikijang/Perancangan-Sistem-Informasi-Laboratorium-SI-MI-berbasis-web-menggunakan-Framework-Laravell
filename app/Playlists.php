<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Playlists extends Model
{
    use SoftDeletes;

	protected $fillable = ['pertemuan','judul','praktikum_id','kelas_id','content','file','video','slug','users_id'];

    public function kelas(){
    	return $this->belongsTo('App\Kelas');
    }

    public function praktikum(){
    	return $this->belongsTo('App\Praktikum');
    }

    public function kategoris(){
    	return $this->belongsToMany('App\Kategoris');
    }

    public function users(){
    	return $this->belongsTo('App\User');
    }
}

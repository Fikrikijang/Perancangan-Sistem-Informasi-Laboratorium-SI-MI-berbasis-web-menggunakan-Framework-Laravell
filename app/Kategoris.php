<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategoris extends Model
{  
	protected $table = 'kategoris';
    protected $fillable = ['name','slug'];

    public function kelas(){
    	return $this->belongsToMany('App\Kelas');
    }

    public function playlists(){
    	return $this->belongsToMany('App\Playlists');
    }
}

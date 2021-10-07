<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praktikum extends Model
{
    protected $fillable = ['name','slug'];
	
    protected $table = 'praktikum';

    public function playlists(){
    	return $this->hasMany('App\Playlists');
    }

    public function jadwal(){
        return $this->hasMany('App\Jadwal');
    }
    
    public function getRouteKeyName()
	{
	    return 'slug';
    }
    

}

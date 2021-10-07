<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
	use SoftDeletes;

	protected $table = 'kelas';

	protected $fillable = ['judul','content','gambar','slug','users_id'];

	public function playlists(){
    	return $this->hasMany('App\Playlists');
    }

    public function getRouteKeyName()
	{
	    return 'slug';
	}

    public function kategoris(){
    	return $this->belongsToMany('App\Kategoris');
    }

    public function users(){
    	return $this->belongsTo('App\User');
	}
	
	
}

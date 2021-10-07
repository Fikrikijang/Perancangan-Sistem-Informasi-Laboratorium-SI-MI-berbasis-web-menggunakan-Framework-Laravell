<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pendaftaran extends Model
{
    protected $table ='pendaftaran';
    protected $fillable = ['nama','npm','email','jk','ipk','foto','krs','dns','telp','alamat'];
    
    
}

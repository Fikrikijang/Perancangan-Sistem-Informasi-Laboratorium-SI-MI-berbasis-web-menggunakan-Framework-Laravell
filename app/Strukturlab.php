<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strukturlab extends Model
{
    protected $table ='strukturlab';
    protected $fillable = ['nama','jabatan','email','gambar'];
}

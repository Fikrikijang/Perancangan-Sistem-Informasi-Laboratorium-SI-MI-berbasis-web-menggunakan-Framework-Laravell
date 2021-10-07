<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Buku extends Model
{
    protected $table ='buku';
    protected $fillable = ['nama_buku','file'];
}

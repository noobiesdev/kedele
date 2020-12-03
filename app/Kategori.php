<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori_kedelai';
    protected $fillable = ['nama', 'deskripsi', 'harga', 'jenis', 'created_at', 'updated_at', 'deleted_at'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisbarang extends Model
{
    use HasFactory;
    protected $fillable = ['jenis_barang'];
    protected $table ='jenis_barang';
}

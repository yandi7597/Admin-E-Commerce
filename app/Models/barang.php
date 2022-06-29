<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang','jenis_barang','harga','produsen','tgl_masuk','stok'];
    protected $table ='barang';
}

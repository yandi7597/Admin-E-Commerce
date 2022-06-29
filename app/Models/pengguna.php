<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;
    protected $fillable = ['nama_pengguna','jk','alamat','no_hp','username','password','jabatan'];
    protected $table ='pengguna';
}

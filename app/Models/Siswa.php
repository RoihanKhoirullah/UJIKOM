<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswas";
    protected $primarykey = "id";
    protected $fillable = [
        'id' , 'no_daftar' , 'nama' , 'jk' , 'alamat' , 'agama' , 'asal_smp' , 'jurusan'];
}

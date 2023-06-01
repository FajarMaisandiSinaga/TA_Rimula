<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable =[
        'nama','nomor_bpjs','nik','tanggal_lahir','umur',
        'jenis_kelamin','agama','alamat','telepon'
    ];
}

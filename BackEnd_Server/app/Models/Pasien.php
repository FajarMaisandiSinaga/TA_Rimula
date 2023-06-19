<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pasien extends Model
{
    use HasFactory;

    protected $with = ['riwayat'];

    protected $fillable =[
        'nama','nomor_bpjs','nik','tanggal_lahir','umur',
        'jenis_kelamin','agama','alamat','telepon'
    ];

    public function riwayat(): HasMany
    {
        return $this->hasMany(Riwayat::class, 'pasien_id', 'id');
    }

    
}

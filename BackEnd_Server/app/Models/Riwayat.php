<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Riwayat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pasien(): BelongsTo
    {
        return $this->belongsTo(Pasien::class, 'pasien_id', 'id');
    }

    protected $hidden = [
        'id',
        'pasien_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}

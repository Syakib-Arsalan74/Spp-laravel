<?php

namespace App\Models;

use App\Models\Spp;
use App\Models\Kelas;
use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    protected $fillable = [
        'nisn',
        'nis',
        'nama',
        'kelas_id',
        'spp_id',
        'alamat',
        'noTelp',
    ];
    /** @use HasFactory<\Database\Factories\SiswaFactory> */
    use HasFactory;

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
    public function spp(): BelongsTo
    {
        return $this->belongsTo(Spp::class);
    }
    public function pembayaran(): HasOne
    {
        return $this->hasOne(Pembayaran::class);
    }
}

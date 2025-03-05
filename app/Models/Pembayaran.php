<?php

namespace App\Models;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    protected $fillable = [
        'nisn',
        'spp_id',
        'petugas_id',
    ];
    /** @use HasFactory<\Database\Factories\PembayaranFactory> */
    use HasFactory;

    public function petugaas(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }
}

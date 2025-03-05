<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Spp extends Model
{
    protected $fillable = [
        'tahun',
        'nominal',
    ];
    /** @use HasFactory<\Database\Factories\SppFactory> */
    use HasFactory;

    public function siswa(): HasOne
    {
        return $this->hasOne(Siswa::class);
    }
}

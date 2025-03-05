<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    protected $fillable = [
        'namaKelas',
        'kejuruan',
    ];
    /** @use HasFactory<\Database\Factories\KelasFactory> */
    use HasFactory;

    public function siswa(): HasOne
    {
        return $this->hasOne(Siswa::class);
    }
}

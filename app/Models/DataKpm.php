<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DataKpm extends Model
{
    use HasFactory;
    protected $table = 'data_kpm';
    protected $fillable = [
        'nik',
        'nama_penerima',
        'kecamatan',
        'desa_kelurahan',
        'alamat',
        'nik_pendamping',
        'dusun',
        'rt',
        'rw',
    ];
    public function sppds()
    {
        return $this->hasMany(Sppd::class);
    }
}

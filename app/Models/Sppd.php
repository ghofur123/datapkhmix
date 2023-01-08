<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sppd extends Model
{
    use HasFactory;
    protected $table = "sppd";
    protected $fillable = [
        'uniq',
        'nik',
        'jenis_bantuan_id',
        'tahun',
        'tahab',
        'status',
        'nominal',
        'catatan',
    ];
    public function datakpms()
    {
        return $this->belongsTo(DataKpm::class);
    }
}

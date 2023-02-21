<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendamping extends Model
{
    use HasFactory;
    protected $table = 'pendamping';
    protected $fillable = [
        'nik',
        'nama',
        'kecamatan_dampingan',
    ];
}

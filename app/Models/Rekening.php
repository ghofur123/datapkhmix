<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;
    protected $table = 'rekening';
    protected $fillable = [
        'nik',
        'penyalur_id',
        'no_rekening',
        'uniq',
    ];
}

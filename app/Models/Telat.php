<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telat extends Model
{
    use HasFactory;
    protected $table = 'telat';
    protected $fillable = [
        'nama_siswa',
        'alasan',
        'waktu_terlambat'
    ];
}

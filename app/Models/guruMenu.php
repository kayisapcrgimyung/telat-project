<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guruMenu extends Model
{
    use HasFactory;
    protected $table = 'guru_menu';
    protected $fillable = [
        'id',
        'nama_siswa',
        'alasan',
        'waktu_terlambat'
    ];
}

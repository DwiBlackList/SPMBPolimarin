<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dayatampung extends Model
{
    use HasFactory;

    protected $table = 'dayatampung';

    protected $fillable = [
        'program_studi',
        'daya_tampung_kelas',
        'daya_tampung_mahasiswa',
        'jalur_prestasi',
        'jalur_tes',
        'jalur_mandiri',
    ];
}

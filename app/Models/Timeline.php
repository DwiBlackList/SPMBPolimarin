<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;

    protected $table = 'timeline';

    protected $fillable = ['nama_kegiatan' , 'tanggal' , 'id_kategori'];

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;

    protected $table = 'download';

    protected $fillable = ['judul' , 'deskripsi' , 'link' , 'id_download_kategori'];

    public function downloadkategori() {
        return $this->belongsTo(DownloadKategori::class, 'id_download_kategori');
    }
}

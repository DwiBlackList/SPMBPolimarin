<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownloadKategori extends Model
{
    use HasFactory;

    protected $table = 'download_kategori';

    protected $fillable = ['nama_kategori'];

    public function downloads()
    {
        return $this->hasMany(Download::class, 'id_download_kategori');
    }
}

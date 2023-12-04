<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = ['nama_web' , 'link_daftar' , 'deskripsi' , 'icon' , 'logo' , 'gambar_wa' , 'google_map' , 'alamat' , 'notelp' , 'nowa' , 'halaman' , 'kontak_email' , 'link_fb' , 'link_twitter' , 'link_instagram'];
}

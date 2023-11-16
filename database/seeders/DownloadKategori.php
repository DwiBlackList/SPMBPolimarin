<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DownloadKategori extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('download_kategori')->insert([
            'nama_kategori' => 'Umum',
            
            // Add more columns as needed
        ]);
        DB::table('download_kategori')->insert([
            'nama_kategori' => 'Seleksi Jalur Prestasi',
            
            // Add more columns as needed
        ]);
        DB::table('download_kategori')->insert([
            'nama_kategori' => 'Seleksi Jalur Tes',
            
            // Add more columns as needed
        ]);
        DB::table('download_kategori')->insert([
            'nama_kategori' => 'Seleksi Jalur Mandiri',
            
            // Add more columns as needed
        ]);
        DB::table('download_kategori')->insert([
            'nama_kategori' => 'Tes Kekhususan',
            
            // Add more columns as needed
        ]);
    }
}

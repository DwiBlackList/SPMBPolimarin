<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Settings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'nama_web' => 'PMB Polimarin',
            'link_daftar' => 'http://#',
            'deskripsi' => '<p><span style="font-size: 18pt;"><strong>Polimarin</strong></span></p>

            <p class="text-white">"Politeknik Maritim Negeri Indonesia VISI Menjadi Politeknik Maritim Negeri bertaraf internasional, yang menghasilkan sumber daya manusia berkarakter, berkompetensi dibidang maritim dan berdaya saing global yang berwawasan lingkungan."</p>',
            'icon' => 'img/icon.png',
            'logo' => 'img/logo.png',
            'gambar_wa' => 'img/wachat.png',
            'google_map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253394.81321296483!2d110.16445310160321!3d-7.091884494638109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ba06087feaf%3A0x6d57bc7196293113!2sPoliteknik%20Maritim%20Negeri%20Indonesia!5e0!3m2!1sid!2sid!4v1701402662961!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'alamat' => 'Jl. Pawiyatan Luhur I /1 Bendan Duwur Semarang 50233',
            'notelp' => '024-86457895, 86457897, Faksimili 86457900',
            'nowa' => '6285....',
            'halaman' => 'polimarin.ac.id, Pos-el info@polimarin.ac.id',
            'kontak_email' => 'pmb@polimarin.ac.id',
            'link_fb' => '#',
            'link_twitter' => '#',
            'link_instagram' => '#',

            // Add more columns as needed
        ]);
    }
}

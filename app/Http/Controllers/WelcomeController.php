<?php

namespace App\Http\Controllers;

use App\Models\Dayatampung;
use App\Models\Jadwal;
use App\Models\Kategori;
use App\Models\Pengumuman;
use App\Models\Timeline;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $jadwal = Jadwal::all();
        $pengumuman = Pengumuman::all();
        $timeline = Timeline::all();
        $kategori = Kategori::all();
        $dayatampung = Dayatampung::all();
        $total_daya_tampung_kelas = $dayatampung->sum('daya_tampung_kelas');
        $total_daya_tampung_mahasiswa = $dayatampung->sum('daya_tampung_mahasiswa');
        $total_jalur_prestasi = $dayatampung->sum('jalur_prestasi');
        $total_jalur_tes = $dayatampung->sum('jalur_tes');
        $total_jalur_mandiri = $dayatampung->sum('jalur_mandiri');
        return view('welcome' , compact('jadwal' , 'pengumuman' , 'timeline' , 'kategori' , 'dayatampung' , 'total_daya_tampung_kelas' , 'total_daya_tampung_mahasiswa' , 'total_jalur_prestasi' , 'total_jalur_tes' , 'total_jalur_mandiri'));
    }

    public function viewPengumuman($id) {
        $pengumuman = Pengumuman::findOrFail($id);

        return view('admin.pengumuman.view' , compact('pengumuman'));
    }

    public function indexJadwalPendaftaran() {
        $timeline = Timeline::all();
        $kategori = Kategori::all();

        return view('jadwal-pendaftaran' , compact('timeline' , 'kategori'));
    }
}

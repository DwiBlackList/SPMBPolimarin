<?php

namespace App\Http\Controllers;

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
        return view('welcome' , compact('jadwal' , 'pengumuman' , 'timeline' , 'kategori'));
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

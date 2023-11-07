<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $jadwal = Jadwal::all();
        $pengumuman = Pengumuman::all();
        return view('welcome' , compact('jadwal' , 'pengumuman'));
    }

    public function viewPengumuman($id) {
        $pengumuman = Pengumuman::findOrFail($id);

        return view('admin.pengumuman.view' , compact('pengumuman'));
    }
}

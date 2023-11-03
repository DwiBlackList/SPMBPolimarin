<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $jadwal = Jadwal::all();
        return view('welcome' , compact('jadwal'));
    }
}

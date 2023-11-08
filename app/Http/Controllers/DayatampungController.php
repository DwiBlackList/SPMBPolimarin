<?php

namespace App\Http\Controllers;

use App\Models\Dayatampung;
use Illuminate\Http\Request;

class DayatampungController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dayatampung = Dayatampung::all();
        $total_daya_tampung_kelas = $dayatampung->sum('daya_tampung_kelas');
        $total_daya_tampung_mahasiswa = $dayatampung->sum('daya_tampung_mahasiswa');
        $total_jalur_prestasi = $dayatampung->sum('jalur_prestasi');
        $total_jalur_tes = $dayatampung->sum('jalur_tes');
        $total_jalur_mandiri = $dayatampung->sum('jalur_mandiri');
        return view('admin.dayatampung.index' , compact('dayatampung' , 'total_daya_tampung_kelas' , 'total_daya_tampung_mahasiswa' , 'total_jalur_prestasi' , 'total_jalur_tes' , 'total_jalur_mandiri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dayatampung.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dayatampung = new Dayatampung();
        $dayatampung->program_studi = $request->program_studi;
        $dayatampung->daya_tampung_kelas = $request->daya_tampung_kelas;
        $dayatampung->daya_tampung_mahasiswa = $request->daya_tampung_mahasiswa;
        $dayatampung->jalur_prestasi = $request->jalur_prestasi;
        $dayatampung->jalur_mandiri = $request->jalur_mandiri;
        $dayatampung->jalur_tes = $request->jalur_tes;
        $dayatampung->save();

        return redirect()->route('daya-tampung.index')->withSuccess("Berhasil menambahkan Data Daya tampung");
    }

    /**
     * Display the specified resource.
     */
    public function show(Dayatampung $dayatampung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dayatampung = Dayatampung::findOrFail($id);

        return view('admin.dayatampung.edit', compact('dayatampung'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , $id)
    {
        $dayatampung = Dayatampung::findOrFail($id);
        $dayatampung->program_studi = $request->program_studi;
        $dayatampung->daya_tampung_kelas = $request->daya_tampung_kelas;
        $dayatampung->daya_tampung_mahasiswa = $request->daya_tampung_mahasiswa;
        $dayatampung->jalur_prestasi = $request->jalur_prestasi;
        $dayatampung->jalur_mandiri = $request->jalur_mandiri;
        $dayatampung->jalur_tes = $request->jalur_tes;
        $dayatampung->update();

        return redirect()->route('daya-tampung.index')->withSuccess("Berhasil Update Data Daya tampung");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dayatampung = Dayatampung::findOrFail($id);
        $dayatampung->delete();

        return response()->json(['success' => true]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        // dd($jadwal);
        return view('admin.jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jadwal = new Jadwal();
        $jadwal->nama_jalur = $request->nama_jalur;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->save();

        return redirect()->route('jadwal.index')->with('success', 'Item created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jadwal = Jadwal::find($id);

	    return response()->json([
	      'data' => $jadwal
	    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $jadwal = Jadwal::findOrFail($request->id);
        $jadwal->nama_jalur = $request->nama_jalur;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->update();

        return response()->json([ 'success' => true ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();

        return response()->json([ 'success' => true ]);
    }
}

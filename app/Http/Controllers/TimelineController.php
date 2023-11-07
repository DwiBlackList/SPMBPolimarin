<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Timeline;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    // konstruktor accessable with login user only
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timeline = Timeline::all();
        $kategori = Kategori::all();
        return view('admin.timeline.index', compact('timeline' , 'kategori'));
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
        $timeline = new Timeline();
        $timeline->nama_kegiatan = $request->nama_kegiatan;
        $timeline->tanggal = $request->tanggal;
        $timeline->id_kategori = $request->id_kategori;
        $timeline->save();

        return redirect()->route('timeline.index')->with('success', 'Item created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Timeline $timeline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $timeline = Timeline::find($id);

	    return response()->json([
	      'data' => $timeline
	    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request , Timeline $timeline)
    {
        $timeline = Timeline::findOrFail($request->id);
        $timeline->nama_kegiatan = $request->nama_kegiatan;
        $timeline->tanggal = $request->tanggal;
        $timeline->id_kategori = $request->id_kategori;
        $timeline->update();
        // dd($timeline);
        return response()->json([ 'success' => true ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $timeline = Timeline::findOrFail($id);
        $timeline->delete();

        return response()->json([ 'success' => true ]);
    }
}

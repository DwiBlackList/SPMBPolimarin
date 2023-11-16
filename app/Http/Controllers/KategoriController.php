<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Time;

class KategoriController extends Controller
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
        //
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
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return redirect()->route('timeline.index')->with('success', 'Item created successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = Kategori::find($id);

	    return response()->json([
	      'data' => $kategori
	    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $kategori = Kategori::findOrFail($request->id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->update();
        
        return response()->json([ 'success' => true ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $timeline = Timeline::where('id_kategori' , $id);
        $timeline->delete();
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return response()->json([ 'success' => true ]);
    }
}

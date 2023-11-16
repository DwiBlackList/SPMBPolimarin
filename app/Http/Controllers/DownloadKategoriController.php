<?php

namespace App\Http\Controllers;

use App\Models\Download;
use App\Models\DownloadKategori;
use Illuminate\Http\Request;

class DownloadKategoriController extends Controller
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
        $downloadKategori = new DownloadKategori();
        $downloadKategori->nama_kategori = $request->nama_kategori;
        $downloadKategori->save();

        return redirect()->route('download.index')->with('success', 'Item created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(DownloadKategori $downloadKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = DownloadKategori::find($id);

	    return response()->json([
	      'data' => $kategori
	    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DownloadKategori $downloadKategori)
    {
        $kategori = DownloadKategori::findOrFail($request->id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->update();
        
        return response()->json([ 'success' => true ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $download = Download::where('id_download_kategori' , 'like' , '%' . $id . '%');
        $download->delete();
        $kategori = DownloadKategori::findOrFail($id);
        $kategori->delete();

        return response()->json([ 'success' => true ]);
    }
}

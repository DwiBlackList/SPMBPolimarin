<?php

namespace App\Http\Controllers;

use App\Models\Download;
use App\Models\DownloadKategori;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DownloadController extends Controller
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
        $download = Download::all();
        $kategori = DownloadKategori::all();

        return view('admin.download.index', compact('download', 'kategori'));
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
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
            'link' => 'required',
            'id_download_kategori' => 'required|array',
        ]);

        if ($validator->fails()) {
            return redirect()->route('download.index')->with('failed', 'Item created failed , Mungkin ada bagian yang kosong'); // To repopulate the old input values in the form
        }


        $id_download_kategori = implode(', ', $request->id_download_kategori);

        $download = new Download();
        $download->judul = $request->judul;
        $download->deskripsi = $request->deskripsi;
        $download->link = $request->link;
        $download->id_download_kategori = $id_download_kategori;
        $download->save();

        return redirect()->route('download.index')->with('success', 'Item created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Download $download)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $download = Download::find($id);

        return response()->json([
            'data' => $download
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Download $download)
    {
        $download = Download::findOrFail($request->id);

        $id_download_kategori = implode(', ', $request->id_download_kategori);

        $download->judul = $request->judul;
        $download->deskripsi = $request->deskripsi;
        $download->link = $request->link;
        $download->id_download_kategori = $id_download_kategori;
        $download->update();

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $download = Download::findOrFail($id);
        $download->delete();

        return response()->json(['success' => true]);
    }
}

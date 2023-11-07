<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengumumanController extends Controller
{
    // konstruktor accessable with login user only
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addImgFluidClass($content) {
        // Use regular expression to find and replace <img> tags with the added class attribute
        $pattern = '/<img(.*?)>/';
        $replacement = '<img$1 class="img-fluid">';
        $content = preg_replace($pattern, $replacement, $content);
    
        return $content;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('admin.pengumuman.index', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $isi = $this->addImgFluidClass($request->isi);

        $userId = Auth::id();

        $pengumuman = new Pengumuman();
        $pengumuman->judul = $request->judul;
        $pengumuman->subjudul = $request->subjudul;
        $pengumuman->userId = $userId;
        $pengumuman->isi = $isi;
        $pengumuman->save();
        return redirect()->route('pengumuman.index')->withSuccess("Berhasil menambahkan pengumuman");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        return view('admin.pengumuman.view', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        $isi = $this->addImgFluidClass($request->isi);

        $pengumuman->judul = $request->judul;
        $pengumuman->subjudul = $request->subjudul;
        $pengumuman->isi = $isi;
        $pengumuman->update();

        return redirect()->route('pengumuman.index')->withSuccess("Berhasil mengedit pengumuman");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();

        return response()->json(['success' => true]);
    }
}

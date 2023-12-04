<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingsController extends Controller
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
        $settings = Settings::findOrFail(1);
        return view('admin.settings.index', compact('settings'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Settings $settings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $settings = Settings::findOrFail($id);

        if ($request->hasFile('icon')) {
            // Store the uploaded file
            $icon = $request->file('icon');
            $originalName = $icon->getClientOriginalName();
            $extension = $icon->getClientOriginalExtension();
            $iconName = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '_' . time() . '.' . $extension;
            $icon->move(public_path('img'), $iconName);
            $settings->icon = "img/" . $iconName;
        }

        if ($request->hasFile('logo')) {
            // Store the uploaded file
            $logo = $request->file('logo');
            $originalName = $logo->getClientOriginalName();
            $extension = $logo->getClientOriginalExtension();
            $logoName = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '_' . time() . '.' . $extension;
            $logo->move(public_path('img'), $logoName);
            $settings->logo = "img/" . $logoName;
        }

        if ($request->hasFile('gambar_wa')) {
            // Store the uploaded file
            $gambar_wa = $request->file('gambar_wa');
            $originalName = $gambar_wa->getClientOriginalName();
            $extension = $gambar_wa->getClientOriginalExtension();
            $gambar_waName = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '_' . time() . '.' . $extension;
            $gambar_wa->move(public_path('img'), $gambar_waName);
            $settings->gambar_wa = "img/" . $gambar_waName;
        }

        $settings->nama_web = $request->nama_web;
        $settings->link_daftar = $request->link_daftar;
        $settings->deskripsi = $request->deskripsi;
        $settings->google_map = $request->google_map;
        $settings->alamat = $request->alamat;
        $settings->notelp = $request->notelp;
        $settings->nowa = $request->nowa;
        $settings->link_fb = $request->link_fb;
        $settings->link_twitter = $request->link_twitter;
        $settings->link_instagram = $request->link_instagram;
        $settings->update();

        return redirect()->route('settings.index')->withSuccess("Berhasil mengedit settings");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Settings $settings)
    {
        //
    }
}

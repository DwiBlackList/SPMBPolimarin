<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
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
        $sliders = new Slider();

        // Store the uploaded file
        $gambar = $request->file('gambar');
        $originalName = $gambar->getClientOriginalName();
        $extension = $gambar->getClientOriginalExtension();
        $gambarName = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '_' . time() . '.' . $extension;
        $gambar->move(public_path('img'), $gambarName);

        $sliders->gambar = "img/" . $gambarName;
        $sliders->save();

        return redirect()->route('sliders.index')->withSuccess("Berhasil Menambah Gambar");
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sliders = Slider::findOrFail($id);
        $sliders->delete();

        return response()->json([ 'success' => true ]);
    }
}

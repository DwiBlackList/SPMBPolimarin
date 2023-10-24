@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="p-5 bg-primary text-white">
  <h1>Program Studi</h1>
  <p>Daftar Program Studi Lengkap <a class="text-white text-bold" href="http://polimarin.ac.id" target="_blank" rel="noopener noreferrer">http://polimarin.ac.id</a></p>
</div>

<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <p class="h1 text-bold">Jurusan Nautika</p>
        <hr width="15%" style="border-width: 5px;">
        <div class="bg-primary rounded-4 p-4 m-3 text-white">
            <p class="h3 text-bold">Nautika (D4) <strong class="h6">Baik</strong></p>
        </div>
        <div class="bg-primary rounded-4 p-4 m-3 text-white">
            <p class="h3 text-bold">Nautika (D3) <strong class="h6">B</strong></p>
        </div>
    </div>
    <div class="container">
        <p class="h1 text-bold">JURUSAN TEKNIKA</p>
        <hr width="15%" style="border-width: 5px;">
        <div class="bg-primary rounded-4 p-4 m-3 text-white">
            <p class="h3 text-bold">TEKNOLOGI REKAYASA PERMESINAN KAPAL (D4) <strong class="h6">Baik</strong></p>
        </div>
        <div class="bg-primary rounded-4 p-4 m-3 text-white">
            <p class="h3 text-bold">TEKNIKA (D3) <strong class="h6">B</strong></p>
        </div>
    </div>
    <div class="container">
        <p class="h1 text-bold">JURUSAN TEKNIKA</p>
        <hr width="15%" style="border-width: 5px;">
        <div class="bg-primary rounded-4 p-4 m-3 text-white">
            <p class="h3 text-bold">TRANSPORTASI LAUT (D4) <strong class="h6">B</strong></p>
        </div>
    </div>
    <div class="container">
        <p class="text-bold">Profil Program Studi detil dapat di akses di <a href="http://polimarin.ac.id" target="_blank" rel="noopener noreferrer">http://polimarin.ac.id</a></p>
    </div>
</div>
@endsection
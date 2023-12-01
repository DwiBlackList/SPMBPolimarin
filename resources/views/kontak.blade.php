@extends('layouts.app')

@section('content')
@php
$settings = \App\Models\Settings::findOrFail(1);
@endphp
<!-- Paling atas -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="bg-warning text-white">
            <h1>
                Tes Kekhususan
            </h1>
        </div>
    </div>
</div>

<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-3 col-12">
                @include('layouts.navcard')
            </div>
            <!-- Konten Kanan -->
            <div class="col-md-9 col-12">
                {!! $settings->google_map !!}
                <div class="card">
                    <div class="card-body text-center">
                        <p>Alamat : {{ $settings->alamat }}</p>
                        <p>Telepon. : {{ $settings->notelp }}</p>
                        <p>Laman : {{ $settings->halaman }}</p>
                        <p>Kontak Person : {{ $settings->kontak_email }}</p>
                        <p>Kontak WA : {{ $settings->notelp }}</p>
                        <p>Sosial Media :</p>
                        <p>
                            <a href="{{ $settings->link_instagram }}" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-3x fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="{{ $settings->link_fb }}" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-3x fa-facebook-official" aria-hidden="true"></i>
                            </a>                            
                            <a href="{{ $settings->link_twitter }}" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-3x fa-twitter" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
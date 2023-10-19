@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="bg-warning text-white">
            <h1>Alur Pendaftaran</h1>
        </div>
    </div>
</div>

<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <div class="row justify-content-center">
            <!-- Kartu Navigasi kiri -->
            @include('layouts.navcard')
            <!-- Konten Kanan -->
            <div class="col-md-8 col-12 text-white">
                <div class="row py-4">
                    <div class="col-12 col-md-3">
                        <h3> Seleksi Jalur Prestasi </h3>
                    </div>
                    <div class="col-12 col-md-9">
                        <ol>
                            <li>Buat akun pendaftaran melalui Portal SPMB</li>
                            <li>Buat akun pendaftaran melalui Portal SPMB</li>
                        </ol>
                    </div>
                </div>

                <div class="row py-4 bg-primary">
                    <div class="col-12 col-md-3">
                        <h3> Seleksi Jalur Prestasi </h3>
                    </div>
                    <div class="col-12 col-md-9">
                        <ol>
                            <li>Buat akun pendaftaran melalui Portal SPMB</li>
                            <li>Buat akun pendaftaran melalui Portal SPMB</li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
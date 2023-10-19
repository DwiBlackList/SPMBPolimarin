@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="bg-warning text-white">
            <h1>Home</h1>
        </div>
    </div>
</div>

<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <div class="row justify-content-center">
            <!-- Kartu Navigasi kiri -->
            @include('layouts.navcard')
            <!-- Konten Kanan -->
            <div class="col-md-8 col-12">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h3>Join Us</h3>
                        <h1>Polimarin</h1>
                        <a href="" class="btn btn-warning p-5">Login SPMB</a>
                    </div>
                    <div class="col-12 col-md-6">
                        gambar
                    </div>
                </div>
                <br>
                <!-- Baris Kedua Konten Kanan -->
                <div class="row">
                    <div class="col-12 col-md 4">
                        Seleksi Jalur Prestasi
                    </div>
                    <div class="col-12 col-md 4">
                        Seleksi Jalur Prestasi
                    </div>
                    <div class="col-12 col-md 4">
                        Seleksi Jalur Prestasi
                    </div>
                </div>
                <!-- baris ketiga konten kanan -->
                <div class="row">
                    <div class="col-12">
                        <h3>Jadwal Pendaftaran</h3>
                        <p>Jadwal</p>
                        <br>
                        <h2>A.Seleksi Jalur Prestasi (SJP)</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td>No</td>
                                    <td>Kegiatan</td>
                                    <td>Waktu Pelaksanaan</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
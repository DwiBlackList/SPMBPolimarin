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
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="/">
                            <div class="d-flex align-content-center">
                                <span class="material-symbols-outlined">
                                    arrow_forward_ios
                                </span> Home
                            </div>
                        </a>
                        <hr>
                        <a href="/">
                            <div class="d-flex align-content-center">
                                <span class="material-symbols-outlined">
                                    arrow_forward_ios
                                </span> Portal SPMB
                            </div>
                        </a>
                        <hr>
                        <a href="/">
                            <div class="d-flex align-content-center">
                                <span class="material-symbols-outlined">
                                    arrow_forward_ios
                                </span> jadwal Pendaftaran
                            </div>
                        </a>
                        <hr>
                        <a href="/">
                            <div class="d-flex align-content-center">
                                <span class="material-symbols-outlined">
                                    arrow_forward_ios
                                </span> Persyaratan
                            </div>
                        </a>
                        <hr>
                        <a href="/">
                            <div class="d-flex align-content-center">
                                <span class="material-symbols-outlined">
                                    arrow_forward_ios
                                </span> Alur Pendaftaran
                            </div>
                        </a>
                        <hr>
                        <a href="/">
                            <div class="d-flex align-content-center">
                                <span class="material-symbols-outlined">
                                    arrow_forward_ios
                                </span> Seleksi Jalur Prestasi
                            </div>
                        </a>
                        <hr>
                        <a href="/">
                            <div class="d-flex align-content-center">
                                <span class="material-symbols-outlined">
                                    arrow_forward_ios
                                </span> Seleksi Jalur Tes
                            </div>
                        </a>
                        <hr>
                        <a href="/">
                            <div class="d-flex align-content-center">
                                <span class="material-symbols-outlined">
                                    arrow_forward_ios
                                </span> Seleksi Jalur Mandiri
                            </div>
                        </a>
                        <hr>
                        <a href="/">
                            <div class="d-flex align-content-center">
                                <span class="material-symbols-outlined">
                                    arrow_forward_ios
                                </span> Tes Kekhususan
                            </div>
                        </a>
                        <hr>
                        <a href="/">
                            <div class="d-flex align-content-center">
                                <span class="material-symbols-outlined">
                                    arrow_forward_ios
                                </span> Biaya
                            </div>
                        </a>
                        <hr>
                        <a href="/">
                            <div class="d-flex align-content-center">
                                <span class="material-symbols-outlined">
                                    arrow_forward_ios
                                </span> Kontak
                            </div>
                        </a>
                        <hr>
                        <a href="/">
                            <div class="d-flex align-content-center">
                                <span class="material-symbols-outlined">
                                    arrow_forward_ios
                                </span> Download
                            </div>
                        </a>
                    </div>
                </div>
            </div>
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
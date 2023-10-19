@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="bg-warning text-white">
            <h1>Program Studi</h1>
        </div>
    </div>
</div>

<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <div class="row justify-content-center">
            <!-- Konten Kiri -->
            <div class="col-md-8 col-12">
                <h1 class="text-bold">Jurusan Nautika</h1>
                <table class="table-responsive table-bordered" width="100%">
                    <tr>
                        <td>Program Studi</td>
                        <td>Jenjang Pendidikan</td>
                        <td>Akreditasi</td>
                    </tr>
                    <tr>
                        <td>Nautika</td>
                        <td>D4</td>
                        <td>Baik</td>
                    </tr>
                    <tr>
                        <td>Nautika</td>
                        <td>D3</td>
                        <td>B</td>
                    </tr>
                </table>

                <br>

                <p class="text-bold">Profil bla bla di <a href="http://polimarin.ac.id" target="_blank" class="text-primary">http://polimarin.ac.id</a></p>

                
            </div>

            <!-- Kartu Navigasi kanan -->
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

        </div>
    </div>
</div>
@endsection
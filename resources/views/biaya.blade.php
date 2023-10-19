@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="bg-warning text-white">
            <h1>Biaya</h1>
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
                <div class="table-responsive">
                    <table class="table-bordered" width="100%">
                        <tr>
                            <td colspan="4"><h4 class="text-bold">Biaya</h4></td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td class="text-bold">Jalur Prestasi</td>
                            <td></td>
                            <td class="text-bold">Biaya</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Biaya Pendaftaran</td>
                            <td>:</td>
                            <td>Gratis</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Biaya Tes</td>
                            <td>:</td>
                            <td>Rp.300.000</td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td class="text-bold">Jalur Prestasi</td>
                            <td></td>
                            <td class="text-bold">Biaya</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Biaya Pendaftaran</td>
                            <td>:</td>
                            <td>Gratis</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Biaya Tes</td>
                            <td>:</td>
                            <td>Rp.300.000</td>
                        </tr>
                    </table>
                </div>
                <br>
                <h1 class="text-bold">TATA CARA PEMBAYARAN</h1>
                <p>"“Pembayaran <strong> Biaya Pendaftaran dan Tes Kekhususan </strong> melalui Virtual Account hanya bisa dilakukan melalui BNI Channel yaitu ATM BNI, Mobile Banking BNI, SMS Banking BNI, Teller Bank BNI, Internet Banking BNI, dan Agen 46 BNI.”</p>
            </div>
        </div>
    </div>
</div>
@endsection
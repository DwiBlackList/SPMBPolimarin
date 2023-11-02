@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="p-5 bg-primary text-white">
    <h1>Biaya</h1>
    <p>“Pembayaran Biaya Pendaftaran dan Tes Kekhususan melalui Virtual Account hanya bisa dilakukan melalui BNI Channel yaitu ATM BNI, Mobile Banking BNI, SMS Banking BNI, Teller Bank BNI, Internet Banking BNI, dan Agen 46 BNI.”</p>
</div>

<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12">
                @include('layouts.navcard')
            </div>
            <div class="col-md-9 col-12">

                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="table-responsive">
                            <table class="table table-striped ">
                                <tr>
                                    <td colspan="2"><strong>Biaya Pendaftaran</strong></td>
                                </tr>
                                <tr>
                                    <td>Jalur</td>
                                    <td>Biaya</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>Jalur Prestasi</strong></td>
                                </tr>
                                <tr>
                                    <td>Biaya Pendaftaran</td>
                                    <td>Gratis</td>
                                </tr>
                                <tr>
                                    <td>Biaya Tes Kekhususan</td>
                                    <td>Rp. 300.000</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>Jalur Tes</strong></td>
                                </tr>
                                <tr>
                                    <td>Biaya Pendaftaran</td>
                                    <td>Rp. 250.000</td>
                                </tr>
                                <tr>
                                    <td>Biaya Tes Kekhususan</td>
                                    <td>Rp. 300.000</td>
                                </tr>
                                <tr>
                                    <td colspan="2"><strong>Jalur Mandiri</strong></td>
                                </tr>
                                <tr>
                                    <td>Biaya Pendaftaran</td>
                                    <td>Rp. 250.000</td>
                                </tr>
                                <tr>
                                    <td>Biaya Tes Kekhususan</td>
                                    <td>Rp. 300.000</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="table-responsive">
                            <table class="table table-striped ">
                                <tr>
                                    <td colspan="2"><strong>BIAYA DAFTAR ULANG (SETELAH DITERIMA)</strong></td>
                                </tr>
                                <tr>
                                    <td>1.Biaya UKT semester 1 (sesuai program studi yang dipilih)</td>
                                    <td>Biaya</td>
                                </tr>
                                <tr>
                                    <td>a. D-4 Nautika (kelas Reguler)</td>
                                    <td>Rp6.000.000</td>
                                </tr>
                                <tr>
                                    <td>b. D-4 Nautika (kelas Joint Degree)</td>
                                    <td>Rp20.000.000</td>
                                </tr>
                                <tr>
                                    <td>c. D-3 Nautika</td>
                                    <td>Rp5.500.000</td>
                                </tr>
                                <tr>
                                    <td>d. D-4 Teknologi Rekayasa Permesinan Kapal</td>
                                    <td>Rp6.000.000</td>
                                </tr>
                                <tr>
                                    <td>e. D-3 Teknika</td>
                                    <td>Rp6.000.000</td>
                                </tr>
                                <tr>
                                    <td>f. D-4 Transportasi Laut</td>
                                    <td>Rp4.000.000</td>
                                </tr>
                                <tr>
                                    <td>2.Biaya Hidup di Asrama Semester 1</td>
                                    <td>Rp7.500.000</td>
                                </tr>
                                <tr>
                                    <td>3.Biaya Seragam (dibayar hanya sekali)</td>
                                    <td>Rp5.500.000</td>
                                </tr>
                                <tr>
                                    <td>4.Bagi yang diterima melalui Jalur Seleksi Mandiri (SJM),wajib membayar biaya Sumbangan Pengembangan Institusi (SPI) (dibayar hanya sekali)</td>
                                    <td>Rp15.000.000 atau Rp20.000.000</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="table-responsive">
                            <table class="table table-striped ">
                                <tr>
                                    <td colspan="2"><strong>BIAYA KULIAH</strong></td>
                                </tr>
                                <tr>
                                    <td>1.Biaya UKT semester 1 (sesuai program studi yang dipilih)</td>
                                    <td>Biaya</td>
                                </tr>
                                <tr>
                                    <td>a. D-4 Nautika (kelas Reguler)</td>
                                    <td>Rp6.000.000</td>
                                </tr>
                                <tr>
                                    <td>b. D-4 Nautika (kelas Joint Degree)</td>
                                    <td>Rp20.000.000</td>
                                </tr>
                                <tr>
                                    <td>c. D-3 Nautika</td>
                                    <td>Rp5.500.000</td>
                                </tr>
                                <tr>
                                    <td>d. D-4 Teknologi Rekayasa Permesinan Kapal</td>
                                    <td>Rp6.000.000</td>
                                </tr>
                                <tr>
                                    <td>e. D-3 Teknika</td>
                                    <td>Rp6.000.000</td>
                                </tr>
                                <tr>
                                    <td>f. D-4 Transportasi Laut</td>
                                    <td>Rp4.000.000</td>
                                </tr>
                                <tr>
                                    <td>2.Biaya Hidup di Asrama per semester (hanya untuk semester 1 dan 2)</td>
                                    <td>Rp7.500.000</td>
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
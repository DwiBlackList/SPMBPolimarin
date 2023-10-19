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
            @include('layouts.navcard')
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
@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="bg-warning text-white">
            <h1>Jadwal Pendaftaran</h1>
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
                            <td><h3 class="text-bold">PERSYARATAN UMUM PENDAFTARAN UNTUK SEMUA JALUR:</h3></td>
                        </tr>
                        <tr>
                            <td>

                                <ol>
                                    <li>Warga Negara Indonesia (WNI)</li>
                                    <li>Usia maksimal 22 tahun per 1 Agustus 2023</li>
                                </ol>
                                <br>
                                asd

                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
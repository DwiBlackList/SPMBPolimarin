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
                <p>Jadwal Pendaftaran dan Seleksi Calon Mahasiswa Baru Tahun 2023:</p>
                <h4 class="text-bold">A. Seleksi</h4>
                <br>
                <div class="table-responsive">

                    <table class="table-bordered" width="100%">
                        <tr>
                            <td>No</td>
                            <td>Kegiatan</td>
                            <td>Waktu Pelaksanaa</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Pendaftaran</td>
                            <td>1Feb - 99 Jan</td>
                        </tr>
                    </table>
                </div>

                <br>

                <h4 class="text-bold">A. Seleksi</h4>
                <br>
                <div class="table-responsive">
                    <table class="table-bordered" width="100%">
                        <tr>
                            <td>No</td>
                            <td>Kegiatan</td>
                            <td>Waktu Pelaksanaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa a aaaaaaaaaaa aaaaaaaaaaaaaaaaaaa </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Pendaftaran</td>
                            <td>1Feb - 99 Jan</td>
                        </tr>
                    </table>
                </div>

                <br>

                <h1 class="text-bold text-warning">SELURUH LAYANAN KEGIATAN TERKAIT DENGAN PMB 2023 AKAN DIAKHIRI JAM 15.00 WIB</h1>

            </div>
        </div>
    </div>
</div>
@endsection
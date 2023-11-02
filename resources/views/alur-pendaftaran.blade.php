@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="p-5 bg-primary text-white">
    <h1>Alur Pendaftaran</h1>
    <p></p>
</div>

<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12 mb-5">
                @include('layouts.navcard')
            </div>
            <div class="col-md-9 col-12">
                <div class="card mb-5">
                    <div class="card-body">
                        <p class="h2">Seleksi Jalur Prestasi</p>
                        <ol>
                            <li>Buat akun pendaftaran melalui Portal SPMB</li>
                            <li>Cek virtual acount (VA) pada akun calon peserta</li>
                            <li>Bayar biaya tes <strong>Kekhususan</strong> menggunakan VA yang tercantum dalam akun calon peserta</li>
                            <li>Lengkapi data rapor yang meliputi : </li>
                            <ul>
                                <li>isian nilai rata-rata rapor semester 1 s/d semester 5</li>
                                <li>upload scan asli rapor semester 1 s/d semester 5</li>
                            </ul>
                            <li>Lengkapi data portofolio tes <strong>Kekhususan</strong> sessuai dengan petunjuk pelaksanaan tes kekhususan</li>
                            <li>Hasil seleksi akan diumumkan melalui portal SPMB Polimarin</li>
                            <li>Proses daftar ulang bagi peserta yang dinyatakan Lolos Seleksi</li>
                        </ol>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-body">
                        <p class="h2">Seleksi Jalur Tes & Mandiri</p>
                        <ol>
                            <li>Buat akun pendaftaran melalui laman https://akademik.polimarin.ac.id/pmb</li>
                            <li>Cek virtual acount (VA) pada akun calon peserta</li>
                            <li>Bayar biaya tes <strong>Kekhususan</strong> menggunakan VA yang tercantum dalam akun calon peserta</li>
                            <li>Mengikuti tes Akademik secara online</li>
                            <li>Lengkapi data portofolio tes kekhususan sessuai dengan petunjuk pelaksanaan tes kekhususan</li>
                            <li>Hasil seleksi akan diumumkan melalui portal SPMB Polimarin</li>
                            <li>Proses daftar ulang bagi peserta yang dinyatakan Lolos Seleksi</li>
                        </ol>
                    </div>
                </div>


            </div>
            
            
        </div>
    </div>
</div>
@endsection
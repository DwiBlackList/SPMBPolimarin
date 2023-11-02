@extends('layouts.app')

@section('content')
<!-- Paling atas -->

<div class="p-5 bg-primary text-white">
    <h1>Tes Kekhususan</h1>
</div>


<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-md-3">
                @include('layouts.navcard')
            </div>

            <!-- Konten Kanan -->
            <div class="col-12 col-md-9">
                <div class="card mb-5">
                    <div class="card-body text-center">
                        <p>PANDUAN PENDAFTARAN </p>
                        <ol>
                            <li>Seleksi Jalur Prestasi <strong>download</strong></li>
                            <li>Seleksi Jalur Tes <strong>download</strong></li>
                            <li>Seleksi Jalur Mandiri <strong>download</strong></li>
                        </ol>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-body text-center">
                        <p><strong>Panduan Tes Kekhususan:</strong></p>
                        <p>Panduan Tes Kesamaptaan Polimarin <strong>download</strong></p>
                        <p>Panduan Tes Kesehatan Polimarin <strong>download</strong></p>
                        <p>Panduan Psikotes <strong>download</strong></p>
                        <p>Panduan Wawancara <strong>download</strong></p>
                    </div>
                </div>

                <div class="card mb-5">
                    <div class="card-body text-center">
                        <p><strong>Lampiran Tes kekhususan yang harus dicetak:</strong></p>
                        <p>Lampiran 1 (Surat Pernyataan Tes Kekhususan) <strong>download</strong></p>
                        <p>Lampiran 2 (Hasil Tes Kesamaptaan) <strong>download</strong></p>
                        <p>Lampiran 3 (Dokumen Pemeriksaan Kesehatan) <strong>download</strong></p>
                        <p>Lampiran 4 (Surat Pernyataan Tes Kesehatan) <strong>download</strong></p>
                        <p>Lampiran 5 (Formulir Wawancara Keuangan) <strong>download</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
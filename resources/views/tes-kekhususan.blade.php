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
                            <li>Seleksi Jalur Prestasi <strong><a href="{{ route('seleksi-jalur-prestasi') }}">Click ME</a></strong></li>
                            <li>Seleksi Jalur Tes <strong><a href="{{ route('seleksi-jalur-tes') }}">Click ME</a></strong></li>
                            <li>Seleksi Jalur Mandiri <strong><a href="{{ route('seleksi-jalur-mandiri') }}">Click ME</a></strong></li>
                        </ol>
                    </div>
                </div>

                @if (count($kategori) > 0)
                @foreach ($kategori as $x)
                @php
                $downloads = App\Models\Download::where('id_download_kategori', 'like', '%' . $x->id . '%')->get();
                @endphp
                <div class="col-12 mb-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="h3 text-bold">Download Paduan</p>
                            @if (count($downloads) > 0)
                            @foreach ($downloads as $y)
                            <p>{{ $y->judul }} <strong><a href="{{ $y->link }}">Download</a></strong></p>
                            @endforeach
                            @else
                            <p>Paduan Belum Ditambahkan</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <!-- JIka Kategori Download Tidak ada -->
                @endif

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
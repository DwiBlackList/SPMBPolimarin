@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="bg-warning text-white">
            <h1>
                Seleksi Jalur Prestasi (SJP)
            </h1>
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
                <h4 class="text-bold">SELEKSI JALUR PRESTASI (SJP)</h4>
                <p>
                    Seleksi Jalur Prestasi merupakan jalur seleksi tanpa tes tertulis bagi calon mahasiswa baru melalui bidang akademik atau minat bakat tertentu. Seleksi berdasarkan pencapaian prestasi akademik (nilai rapor) semester 1 sampai dengan 5. Selain itu jalur ini juga ditujukan bagi calon mahasiswa yang memiliki prestasi (pernah menjadi juara atau finalis di berbagai lomba di tingkat nasional atau provinsi atau kabupaten dalam kurun waktu 3 tahun terakhir) di berbagai bidang seperti olahraga, seni, budaya, dan penalaran (misal olimpiade, karya ilmiah, debat, dan lain-lain).
                </p>
                <h4 class="text-bold">SELEKSI JALUR PRESTASI (SJP)</h4>
                <ol>
                    <li>Siswa tahun terakhir pada pendidikan menengah yang akan lulus pada tahun 2023;</li>
                    <li>aaaSiswa tahun terakhir pada pendidikan menengah yang akan lulus pada tahun 2023;</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
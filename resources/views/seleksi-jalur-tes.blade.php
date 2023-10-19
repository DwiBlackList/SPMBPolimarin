@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="bg-warning text-white">
            <h1>
                Seleksi Jalur Tes (SJT)
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
                <h4 class="text-bold">SELEKSI JALUR Tes (SJT)</h4>
                <p>
                    Seleksi Jalur Tes (SJT) merupakan jalur seleksi melalui tes akademik bagi calon mahasiswa baru yang dapat diikuti oleh lulusan SMA/SMK/MA tahun 2021, 2022, atau 2023.
                </p>
                <ol>
                    <li>Siswa tahun terakhir pada pendidikan menengah yang akan lulus pada tahun 2023;</li>
                    <li>aaaSiswa tahun terakhir pada pendidikan menengah yang akan lulus pada tahun 2023;</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
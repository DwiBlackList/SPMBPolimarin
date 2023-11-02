@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://pmb.dinus.ac.id/wp-content/uploads/sites/7/2023/02/03.-Alur-Kebutuhan-Khusus-scaled.jpg" alt="Los Angeles" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="https://pmb.dinus.ac.id/wp-content/uploads/sites/7/2023/09/slider1-scaled.jpg" alt="Chicago" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="https://pmb.dinus.ac.id/wp-content/uploads/sites/7/2023/09/slider2-scaled.jpg" alt="New York" class="d-block w-100">
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<div class="py-5 bg-info">
    <div class="container">
        <p class="h1 text-white text-bold">Polimarin</p>
        <p class="text-white">
            "Politeknik Maritim Negeri Indonesia VISI Menjadi Politeknik Maritim Negeri bertaraf internasional, yang menghasilkan sumber daya manusia berkarakter, berkompetensi dibidang maritim dan berdaya saing global yang berwawasan lingkungan."
        </p>

        <div class="row">
            <div class="col-12 col-md-4 align-content-center">
                <center>
                    <p>
                        Seleksi Jalur Prestasi (SJP)
                    </p>
                    <a href="#" class="btn btn-secondary">1 - 28 February 2023</a>
                </center>
            </div>
            <div class="col-12 col-md-4 align-content-center">
                <center>
                    <p>
                        Seleksi Jalur Tes (SJT)
                    </p>
                    <a href="#" class="btn btn-secondary">23 Maret - 31 Mei 2023</a>
                </center>
            </div>
            <div class="col-12 col-md-4 align-content-center">
                <center>
                    <p>
                        Seleksi Jalur Mandiri (SJM)
                    </p>
                    <a href="#" class="btn btn-secondary">22 Juni - 20 July 2023</a>
                </center>
            </div>
        </div>
        <hr>
        <center>
            <a href="https://akademik.polimarin.ac.id/pmb/" target="_blank" class="btn rounded-pill btn-success">Daftar Sekarang</a>
        </center>
    </div>
</div>
<div class="container-fluid py-5" style="background-color:#f6f6f7;">
    <div class="row">
        <div class="col-12 col-md-2">
            @include('layouts.navcard')
        </div>
        <div class="col-12 col-md-10">

            <div>
                <div class="container py-5">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            <p class="h1 text-bold"> Pengumuman</p>
                            <hr width="15%" style="border-width: 5px;">
                            <p>
                                Cek Pengumuman Hasil Seleksi dan Proses Daftar Ulang Disini
                            </p>
                        </div>
                        <div class="col-md-7 col-12">
                            <div class="row">
                                <div class="col-md-6 col-12 py-2">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <span class="material-symbols-outlined">
                                                description
                                            </span>
                                            <p class="h6">PENGUMUMAN SELEKSI PROGRAM MAGISTER TERAPAN (GEL 2)</p>
                                            <p>Pengumuman hasil seleksi Program Magister Terapan POLINES 2023 (Gelombang 2)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 py-2">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <span class="material-symbols-outlined">
                                                description
                                            </span>
                                            <p class="h6">PENGUMUMAN SELEKSI PROGRAM MAGISTER TERAPAN (GEL 2)</p>
                                            <p>Pengumuman hasil seleksi Program Magister Terapan POLINES 2023 (Gelombang 2)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 py-2">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <span class="material-symbols-outlined">
                                                description
                                            </span>
                                            <p class="h6">PENGUMUMAN SELEKSI PROGRAM MAGISTER TERAPAN (GEL 2)</p>
                                            <p>Pengumuman hasil seleksi Program Magister Terapan POLINES 2023 (Gelombang 2)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 py-2">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <span class="material-symbols-outlined">
                                                description
                                            </span>
                                            <p class="h6">PENGUMUMAN SELEKSI PROGRAM MAGISTER TERAPAN (GEL 2)</p>
                                            <p>Pengumuman hasil seleksi Program Magister Terapan POLINES 2023 (Gelombang 2)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container py-5">
    <p class="h1">Jadwal Pendaftaran</p>
    <hr width="15%" style="border-width: 5px;">
    <div class="table-responsive">
        <table class="table table-striped ">
            <tr>
                <td colspan="2"><strong>Seleksi Jalur Prestasi (SJP)</strong></td>
            </tr>
            <tr>
                <td>Kegiatan</td>
                <td>Waktu Pelaksanaan</td>
            </tr>
            <tr>
                <td>Pendaftaran</td>
                <td>1 Februari – 28 Februari 2023</td>
            </tr>
            <tr>
                <td>Seleksi Administrasi</td>
                <td>2 Februari – 1 Maret 2023</td>
            </tr>
            <tr>
                <td>Seleksi Prestasi</td>
                <td>1 Maret 2023</td>
            </tr>
            <tr>
                <td>Tes Kesehatan</td>
                <td>1 Februari – 28 Februari 2023 (Portofolio)</td>
            </tr>
            <tr>
                <td>Wawancara</td>
                <td>1 Februari – 28 Februari 2023 (Portofolio)</td>
            </tr>
            <tr>
                <td>Tes Psikotes</td>
                <td>1 Februari – 28 Februari 2023 (Portofolio)</td>
            </tr>
            <tr>
                <td>Tes Kesamaptaan</td>
                <td>1 Februari – 28 Februari 2023 (Portofolio)</td>
            </tr>
        </table>
    </div>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped ">
            <tr>
                <td colspan="2"><strong>Seleksi Jalur Prestasi (SJP)</strong></td>
            </tr>
            <tr>
                <td>Kegiatan</td>
                <td>Waktu Pelaksanaan</td>
            </tr>
            <tr>
                <td>Pendaftaran</td>
                <td>1 Februari – 28 Februari 2023</td>
            </tr>
            <tr>
                <td>Seleksi Administrasi</td>
                <td>2 Februari – 1 Maret 2023</td>
            </tr>
            <tr>
                <td>Seleksi Prestasi</td>
                <td>1 Maret 2023</td>
            </tr>
            <tr>
                <td>Tes Kesehatan</td>
                <td>1 Februari – 28 Februari 2023 (Portofolio)</td>
            </tr>
            <tr>
                <td>Wawancara</td>
                <td>1 Februari – 28 Februari 2023 (Portofolio)</td>
            </tr>
            <tr>
                <td>Tes Psikotes</td>
                <td>1 Februari – 28 Februari 2023 (Portofolio)</td>
            </tr>
            <tr>
                <td>Tes Kesamaptaan</td>
                <td>1 Februari – 28 Februari 2023 (Portofolio)</td>
            </tr>
        </table>
    </div>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped ">
            <tr>
                <td colspan="2"><strong>Seleksi Jalur Prestasi (SJP)</strong></td>
            </tr>
            <tr>
                <td>Kegiatan</td>
                <td>Waktu Pelaksanaan</td>
            </tr>
            <tr>
                <td>Pendaftaran</td>
                <td>1 Februari – 28 Februari 2023</td>
            </tr>
            <tr>
                <td>Seleksi Administrasi</td>
                <td>2 Februari – 1 Maret 2023</td>
            </tr>
            <tr>
                <td>Seleksi Prestasi</td>
                <td>1 Maret 2023</td>
            </tr>
            <tr>
                <td>Tes Kesehatan</td>
                <td>1 Februari – 28 Februari 2023 (Portofolio)</td>
            </tr>
            <tr>
                <td>Wawancara</td>
                <td>1 Februari – 28 Februari 2023 (Portofolio)</td>
            </tr>
            <tr>
                <td>Tes Psikotes</td>
                <td>1 Februari – 28 Februari 2023 (Portofolio)</td>
            </tr>
            <tr>
                <td>Tes Kesamaptaan</td>
                <td>1 Februari – 28 Februari 2023 (Portofolio)</td>
            </tr>
        </table>
    </div>
</div>
<div class="py-5 bg-info">
    <div class="container">
        <p class="h1">Daya Tampung Program Studi</p>
        <hr width="15%" style="border-width: 5px;">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <tr>
                    <th rowspan="2">Kelas Di Program Studi</th>
                    <th rowspan="2">Data Tampung Kelas</th>
                    <th rowspan="2">Daya Tampung Mahasiswa</th>
                    <th colspan="3">Jalur Seleksi</th>
                </tr>
                <tr>
                    <th>Prestasi</th>
                    <th>Tes</th>
                    <th>Mandiri</th>
                </tr>
                <tr>
                    <td>D-4 Nautika (kelas Reguler)</td>
                    <td>1</td>
                    <td>24</td>
                    <td>10</td>
                    <td>12</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>D-4 Nautika (kelas Joint Degree)</td>
                    <td>1</td>
                    <td>24</td>
                    <td>10</td>
                    <td>12</td>
                    <td>3</td>
                </tr>

                <tr>
                    <td>Jumlah</td>
                    <td>9</td>
                    <td>234</td>
                    <td>57</td>
                    <td>144</td>
                    <td>63</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
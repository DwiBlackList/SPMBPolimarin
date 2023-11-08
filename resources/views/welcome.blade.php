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
            @foreach($jadwal as $x)
            <div class="col-12 col-md-4 align-content-center">
                <center>
                    <p>
                        {{ $x->nama_jalur }}
                    </p>
                    <a href="#" class="btn btn-secondary">{{ $x->tanggal }}</a>
                </center>
            </div>
            @endforeach

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
                                @foreach($pengumuman as $x)
                                <a id="link-pengumuman" href="{{ route('viewPengumuman' , $x->id) }}">
                                    <div class="col-md-6 col-12 py-2">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <span class="material-symbols-outlined">
                                                    description
                                                </span>
                                                <p class="h3">{{ $x->judul }}</p>
                                                <p>{{ $x->subjudul }}</p>
                                                <div class="row">
                                                    <div class="col-6">
                                                        {{ $x->user->name }}
                                                    </div>
                                                    <div class="col-6">
                                                        {{ $x->created_at }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
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
    @if (count($kategori) > 0)
    @foreach ($kategori as $x)
    @php $timelines = App\Models\Timeline::all()->where('id_kategori' , '=' , $x->id) @endphp
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <tr>
                <td colspan="5" class="text-bold">{{ $x->nama_kategori }}</td>
            </tr>
            @if (count($timelines) > 0)
            @foreach ($timelines as $y)
            <tr>
                <td>{{ $y->nama_kegiatan }}</td>
                <td>:</td>
                <td>{{ $y->tanggal }}</td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="h3 text-bold">Data Timeline Tidak Tersedia</td>
            </tr>
            @endif
        </table>
    </div>
    @endforeach
    @else
    <p class="h3 text-bold">Data Jadwal Tidak Tersedia</p>
    @endif
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
                @if (count($dayatampung) > 0)
                @foreach ($dayatampung as $x)
                <tr>
                    <td>{{ $x->program_studi }}</td>
                    <td>{{ $x->daya_tampung_kelas }}</td>
                    <td>{{ $x->daya_tampung_mahasiswa }}</td>
                    <td>{{ $x->jalur_prestasi }}</td>
                    <td>{{ $x->jalur_tes }}</td>
                    <td>{{ $x->jalur_mandiri }}</td>
                </tr>
                @endforeach
                <tr>
                    <td>Jumlah</td>
                    <td>{{ $total_daya_tampung_kelas }}</td>
                    <td>{{ $total_daya_tampung_mahasiswa }}</td>
                    <td>{{ $total_jalur_prestasi }}</td>
                    <td>{{ $total_jalur_tes }}</td>
                    <td>{{ $total_jalur_mandiri }}</td>
                </tr>
                @else
                <tr>
                    <td colspan="7" class="h3 text-bold">No data available</td>
                </tr>
                @endif

            </table>
        </div>
    </div>
</div>
@endsection
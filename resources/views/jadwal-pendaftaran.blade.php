@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="p-5 bg-primary text-white">
    <h1>Jadwal Pendaftaran</h1>
    <p>Jadwal Pendaftaran dan Seleksi Calon Mahasiswa Baru</p>
</div>

<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12">
                @include('layouts.navcard')
            </div>
            <div class="col-md-9 col-12">

                <div class="row justify-content-center">
                    @if (count($kategori) > 0)
                    @foreach ($kategori as $x)
                    @php $timelines = App\Models\Timeline::all()->where('id_kategori' , '=' , $x->id) @endphp
                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <p class="h3 text-bold">{{ $x->nama_kategori }} : </p>

                                @if (count($timelines) > 0)
                                @foreach ($timelines as $y)
                                <table>
                                    <tr>
                                        <td>{{ $y->nama_kegiatan }}</td>
                                        <td>:</td>
                                        <td>{{ $y->tanggal }}</td>
                                    </tr>
                                </table>
                                @endforeach
                                @else
                                <p class="h3 text-bold">Data Timeline Tidak Tersedia</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <p class="h3 text-bold">Data Jadwal Tidak Tersedia</p>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
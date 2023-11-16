@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="p-5 bg-primary text-white">
    <h1>Download Page</h1>
</div>

<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <div class="row justify-content-center">

            @if (count($kategori) > 0)
            @foreach ($kategori as $x)
            @php
            $downloads = App\Models\Download::where('id_download_kategori', 'like', '%' . $x->id . '%')->get();
            @endphp
            <p class="h2">{{ $x->nama_kategori }}</p>
            <hr width="15%" style="border-width: 5px;">
            @if (count($downloads) > 0)
            @foreach ($downloads as $y)
            <div class="col-12 col-md-6 mb-5">
                <a href="{{ $y->link }}">
                    <div class="card">
                        <div class="card-body text-center">
                            <span class="material-symbols-outlined">
                                download
                            </span>
                            <p class="h6">{{ $y->judul }}</p>
                            <p>{{ $y->deskripsi }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @else
            <div class="col-12 col-md-6 mb-5">
                <div class="card">
                    <div class="card-body text-center">
                        Data Download Tidak Ada Di Kategori Ini
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @else
            <!-- jika kategori tidak ada -->
            @endif


        </div>
    </div>
</div>
@endsection
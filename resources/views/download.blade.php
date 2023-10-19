@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="bg-warning text-white">
            <h1>
                Download
            </h1>
        </div>
    </div>
</div>

<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <div class="row justify-content-center">

            <!-- Konten Kanan -->
            <div class="col-md-8 col-12">
                <h1>test</h1>
            </div>


            <!-- Kartu Navigasi kiri -->
            @include('layouts.navcard')
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <p class="h1"> {{ $pengumuman->judul }} </p>
            <hr width="25%" style="border-width: 5px;">
            <br>

            {!! $pengumuman->isi !!}

            <hr>
            <div class="justify-content-between d-flex">
                <div>
                    {{ $pengumuman->user->name }}
                </div>
                <div>
                    {{ $pengumuman->created_at }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
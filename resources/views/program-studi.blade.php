@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="bg-warning text-white">
            <h1>Program Studi</h1>
        </div>
    </div>
</div>

<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <div class="row justify-content-center">
            <!-- Konten Kiri -->
            <div class="col-md-8 col-12">
                <h1 class="text-bold">Jurusan Nautika</h1>
                <div class="table-responsive">

                    <table class="table-bordered" width="100%">
                        <tr>
                            <td>Program Studi</td>
                            <td>Jenjang Pendidikan</td>
                            <td>Akreditasi</td>
                        </tr>
                        <tr>
                            <td>Nautika</td>
                            <td>D4</td>
                            <td>Baik</td>
                        </tr>
                        <tr>
                            <td>Nautika</td>
                            <td>D3</td>
                            <td>B</td>
                        </tr>
                    </table>
                </div>

                <br>

                <p class="text-bold">Profil bla bla di <a href="http://polimarin.ac.id" target="_blank" class="text-primary">http://polimarin.ac.id</a></p>


            </div>

            <!-- Kartu Navigasi kanan -->
            @include('layouts.navcard')

        </div>
    </div>
</div>
@endsection
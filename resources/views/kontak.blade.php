@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="bg-warning text-white">
            <h1>
                Tes Kekhususan
            </h1>
        </div>
    </div>
</div>

<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-3 col-12">
                @include('layouts.navcard')
            </div>
            <!-- Konten Kanan -->
            <div class="col-md-9 col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.9279123579695!2d110.39622447421128!3d-7.017759768743619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ba06087feaf%3A0x6d57bc7196293113!2sPoliteknik%20Maritim%20Negeri%20Indonesia!5e0!3m2!1sid!2sid!4v1697698132371!5m2!1sid!2sid" width="100%" height="50%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="card">
                    <div class="card-body text-center">
                        <p>Alamat : Jl. Pawiyatan Luhur I /1 Bendan Duwur Semarang 50233</p>
                        <p> Telepon. : 024-86457895, 86457897, Faksimili 86457900</p>
                        <p> Laman : polimarin.ac.id, Pos-el info@polimarin.ac.id</p>
                        <p>Kontak Person : pmb@polimarin.ac.id</p>
                        <p>Kontak WA : 082138929393</p>
                        <p>Sosial Media :</p>
                        <p> Instagram : pmb.polimarinsmg</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
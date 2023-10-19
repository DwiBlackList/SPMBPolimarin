@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="bg-warning text-white">
            <h1>
                Program Alih Jenjang (Transer SKS)
            </h1>
        </div>
    </div>
</div>

<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <div class="row justify-content-center">
            <!-- Konten Kiri -->
            <div class="col-md-8 col-12">
                <p>
                    Dalam rangka penguatan pendidikan vokasi dan meningkatkan peran Pendidikan Tinggi Vokasi untuk meningkatkan daya saing nasional internasional serta mewujudkan kemitraan yang kuat dengan dunia industri (IDUKA) dalam sinkronisasi link and match melalui pengembangan kurikulum, magang Industri, penerapan belajar project based learning dan case study untuk menghasilkan lulusan yang relevan dengan pasar kerja dan langsung terserap di dunia kerja. Politeknik Maritim Negeri Indonesia (POLIMARIN) memberikan kesempatan bagi para lulusan diploma tiga (D3) Program Studi Nautika untuk melanjutkan pendidikan ke jenjang yang lebih tinggi untuk meningkatkan mutu lulusan Sarjana Terapan dan melaksanakan (Rencana Strategis) Renstra Kementerian Pendidikan dan Kebudayaan dalam upaya meningkatkan sumber daya manusia Pendidikan Tinggi Vokasi terampil dan unggul serta relevan dengan IDUKA. Politeknik Maritim Negeri Indonesia (Polimarin) di Semarang membuka pendaftaran baru Program Alih Jenjang Program Sarjana Terapan Program Studi Nautika. Program Alih Jenjang ini para mahasiswa akan menempuh perkuliahan selama 2 semester.
                </p>

                <p class="text-bold">Biaya :</p>

                <ol>
                    <li>Biaya Pendaftaran Rp. 300.000,00 </li>
                    <li>Biaya Pendaftaran Rp. 300.000,00 </li>
                </ol>

                <p class="text-bold">Jadwal</p>

                <ul>
                    <li>Pendaftaran : 3 April s/d 31 Juli 2023</li>
                    <li>Pendaftaran : 3 April s/d 31 Juli 2023</li>
                </ul>

                <p class="text-dangger">Sebelum melakukan pendaftaran, peserta di wajibkan untuk mengisi template formulir yang di sediakan pada link di bawah ini:</p>

                <a href="#" class="p-5 btn btn-warning text-white">Daftar</a>

            </div>

            <!-- Kartu Navigasi kanan -->
            @include('layouts.navcard')

        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="p-5 bg-primary text-white">
    <h1>Program Alih Jenjang (SKS Transfer)</h1>
    <p>Dalam rangka penguatan pendidikan vokasi dan meningkatkan peran Pendidikan Tinggi Vokasi untuk meningkatkan daya saing nasional internasional serta mewujudkan kemitraan yang kuat dengan dunia industri (IDUKA) dalam sinkronisasi link and match melalui pengembangan kurikulum, magang Industri, penerapan belajar project based learning dan case study untuk menghasilkan lulusan yang relevan dengan pasar kerja dan langsung terserap di dunia kerja. Politeknik Maritim Negeri Indonesia (POLIMARIN) memberikan kesempatan bagi para lulusan diploma tiga (D3) Program Studi Nautika untuk melanjutkan pendidikan ke jenjang yang lebih tinggi untuk meningkatkan mutu lulusan Sarjana Terapan dan melaksanakan (Rencana Strategis) Renstra Kementerian Pendidikan dan Kebudayaan dalam upaya meningkatkan sumber daya manusia Pendidikan Tinggi Vokasi terampil dan unggul serta relevan dengan IDUKA. Politeknik Maritim Negeri Indonesia (Polimarin) di Semarang membuka pendaftaran baru Program Alih Jenjang Program Sarjana Terapan Program Studi Nautika. Program Alih Jenjang ini para mahasiswa akan menempuh perkuliahan selama 2 semester.</p>
</div>


<div class="py-5 bg-info"> <!-- Rubah bg dan padding atas -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12">
                @include('layouts.navcard')
            </div>
            <div class="col-md-9 col-12">

                <div class="row justify-content-center">
                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body text-center">
                                <p class="h3 text-bold">PERSYARATAN : </p>
                                <p>Pendaftar adalah lulusan Politeknik/Akademi/Sekolah Tinggi, Pelayaran </p>

                                <p>Membayar Biaya Pendaftaran.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <p class="h3 text-bold">Mengumpulkan Berkas Pendaftaran : </p>
                                <ol>
                                    <li>Fotokopi Ijazah terakhir yang telah dilegalisir </li>
                                    <li>Fotokopi Transkrip Akademik yang telah dilegalisir </li>
                                    <li>Surat pernyataan dari pendaftar yang menyatakan bahwa pendaftar telah terdaftar di Pangkalan Data Pendidikan Tinggi (PD Dikti) perguruan tinggi asal dan status sudah dinyatakan lulus. </li>
                                    <li>Pasfoto berwarna ukuran 4×6 sebanyak 2 lembar warna latar belakang biru. </li>
                                    <li>Surat keterangan bebas buta warna dari rumah sakit pemerintah. </li>
                                    <li>Surat pernyataan kesanggupan untuk pembiayaan kuliah dari orang tua/wali pendaftar bermaterai.</li>
                                    <li>Pembuatan rancangan awal penelitian Skripsi Terapan (maksimum 5 halaman), format terlampir.</li>

                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body text-center">
                                <p class="h3 text-bold">Biaya Pendaftaran : </p>
                                <ol>
                                    <li>Biaya Pendaftaran Rp. 300.000,00 </li>
                                    <li>Pembayaran Biaya Pendaftaran melalui Rek 0727272719 BPN 026 Polimarin Semarang Bank BNI 46 Cab Undip Pleburan. dan Konfirmasi Bp. Purwanto via WA: @087738601002</li>
                                    <li>Biaya Matrikulasi Rp. 1.500.000,00 </li>
                                    <li>Biaya kuliah per semester Rp. 7.500.000,00 </li>
                                    <li>Sumbangan Pengembangan Pengembangan Institusi (SPI)*</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <p class="h3 text-bold">Jadwal Pendaftaran : </p>
                                <table>
                                    <tr>
                                        <td>Pendaftaran</td>
                                        <td>:</td>
                                        <td>3 April s/d 31 Juli 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Seleksi Administrasi dan Wawancara </td>
                                        <td>:</td>
                                        <td>31 Juli s/d 4 Agustus 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Pengumuman Hasil Seleksi </td>
                                        <td>:</td>
                                        <td>8 Agustus 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Pembayaran Daftar Ulang </td>
                                        <td>:</td>
                                        <td>8 s/d 20 Agustus 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Pemberkasan </td>
                                        <td>:</td>
                                        <td> 8 s/d 20 Agustus 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Matrikulasi </td>
                                        <td>:</td>
                                        <td>21 s/d 25 Agustus 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Perkuliahan Semester Gasal 2022/2023 </td>
                                        <td>:</td>
                                        <td>5 September 2023</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body text-center">
                                <p class="h3 text-bold">Sebelum melakukan pendaftaran, peserta di wajibkan untuk mengisi template formulir yang di sediakan pada link di bawah ini:</p>
                                <p><strong>TEMPLATE BERKAS YANG HARUS DI UPLOAD</strong> download</p>

                                <a href="#" class="btn btn-warning p-3">Daftar</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
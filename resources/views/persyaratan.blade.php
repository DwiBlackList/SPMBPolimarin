@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="p-5 bg-primary text-white">
    <h1>PERSYARATAN</h1>
    <p>Untuk Calon Mahasiswa Baru</p>
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
                            <div class="card-body">
                                <p class="h3 text-bold">PERSYARATAN UMUM PENDAFTARAN UNTUK SEMUA JALUR : </p>
                                <ol>
                                    <li>Warga Negara Indonesia (WNI)</li>
                                    <li>Usia maksimal 22 tahun per 1 Agustus 2023;</li>
                                    <li>Tinggi badan minimal pria 160 cm, wanita 155 cm;</li>
                                    <li>Tidak tuna netra, tuna rungu, tuna wicara, dan tuna daksa;</li>
                                    <li>Tidak buta warna (keseluruhan maupun sebagian);</li>
                                    <li>Bebas narkoba;</li>
                                    <li>Lulus tes kekhususan (tes kesehatan, wawancara, psikotes, dan tes kesamaptaan);</li>
                                    <li>Tidak berkacamata (khusus untuk Jurusan Nautika dan Teknika);</li>
                                    <li>Tidak mempunyai penyakit kronis;</li>
                                    <li>Tidak bertato, tidak bertindik bagi laki-laki dan hanya terdapat tindik pada daun telinga bagi perempuan;</li>
                                    <li>Belum pernah menikah, tidak hamil, dan belum memiliki anak;</li>
                                    <li>Tidak sedang menjalani dan terancam hukum pida</li>
                                    <li>Menyerahkan kelengkapan pendaftaran : </li>
                                    <ul>
                                        <li>Bukti lunas pendaftaran;</li>
                                        <li>Fotokopi identitas diri (KTP/SIM/Paspor);</li>
                                        <li>Fotokopi akta kelahiran;</li>
                                        <li>Surat pernyataan calon mahasiswa (bermeterai 10.000);</li>
                                        <li>Fotokopi SKCK legalisasi;</li>
                                        <li>Fotokopi ijazah SMA/MA/SMK dilegalisir/Surat Keterangan Lulus;</li>
                                        <li>Fotokopi Kartu</li>
                                    </ul>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <p class="h3 text-bold">Persyaratan Asal Sekolah : </p>
                                <ol>
                                    <li>Jurusan Nautika : </li>
                                    <ul>
                                        <li>Program studi D-4 Nautika (kelas Reguler, Joint Degree, dan Alih Jenjang);</li>
                                        <li>Program studi D-3 Nautika.</li>
                                    </ul>
                                    Menerima Calon Mahasiswa :
                                    <ul>
                                        <li>SMA/MA jurusan IPA</li>
                                        <li>SMK Pelayaran jurusan Nautika Kapal Niaga</li>
                                    </ul>
                                    *Syarat tambahan khusus bagi pendaftar D-4 Nautika kelas joint degree melampirkan sertifikat TOEFL skor minimal 400

                                    <li>Jurusan Teknika : </li>
                                    <ul>
                                        <li>Program studi D-4 Teknologi Rekayasa Permesinan Kapal;</li>
                                        <li>Program studi D-3 Nautika.</li>
                                    </ul>
                                    Menerima Calon Mahasiswa :
                                    <ul>
                                        <li>SMA/MA jurusan IPA</li>
                                        <li>SMK Pelayaran jurusan Nautika Kapal Niaga</li>
                                        <li>SMK :</li>
                                        <ul>
                                            <li>SMK / MAK – Teknik Pembangkit Tenaga Listrik</li>
                                            <li>SMK / MAK – Teknik Jaringan Tenaga Listrik</li>
                                            <li>SMK / MAK – Teknik Instalasi Tenaga Listrik</li>
                                            <li>SMK / MAK – Teknik Otomasi Industri</li>
                                            <li>SMK / MAK – Teknik Pendinginan dan Tata Udara</li>
                                            <li>SMK / MAK – Teknik Tenaga Listrik</li>
                                            <li>SMK / MAK – Teknik Pemesinan</li>
                                            <li>SMK / MAK – Teknik Pengelasan</li>
                                            <li>SMK / MAK – Teknik Pengecoran Logam</li>
                                            <li>SMK / MAK – Teknik Mekanik Industri</li>
                                            <li>SMK / MAK – Teknik Perancangan dan Gambar Mesin</li>
                                            <li>SMK / MAK – Teknik Fabrikasi Logam dan Manufaktur</li>
                                            <li>SMK / MAK – Instrumentasi dan Otomatisasi Proses</li>
                                            <li>SMK / MAK – Teknik Kendaraan Ringan Otomotif</li>
                                            <li>SMK / MAK – Teknik Alat Berat</li>
                                            <li>SMK / MAK – Teknik dan Manajemen Perawatan Otomotif</li>
                                            <li>SMK / MAK – Otomotif Daya dan Konversi Energi</li>
                                            <li>SMK / MAK – Teknik Pemesinan Kapal</li>
                                            <li>SMK / MAK – Teknik Kelistrikan Kapal</li>
                                            <li>SMK / MAK – Teknik Elektronika Industri</li>
                                            <li>SMK / MAK – Teknik Mekatronika</li>
                                            <li>SMK / MAK – Teknik Kapal Niaga</li>
                                            <li>SMK / MAK – Kontrol Mekanik</li>
                                            <li>SMK / MAK – Kontrol Proses</li>
                                            <li>SMK / MAK – Teknik pemeliharaan mekanik industri</li>
                                        </ul>
                                    </ul>
                                    <li>Jurusan Bisnis Maritim : </li>
                                    <ul>
                                        <li>Program studi D-4 Transportasi Laut.</li>
                                    </ul>
                                    Menerima calon mahasiswa dari SMA/SMK/MA (semua jurusan).
                                </ol>
                            </div>
                        </div>
                    </div>

                    @if (count($kategori) > 0)
                    @foreach ($kategori as $x)
                    @php
                    $downloads = App\Models\Download::where('id_download_kategori', 'like', '%' . $x->id . '%')->get();
                    @endphp
                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body text-center">
                                <p class="h3 text-bold">Download Paduan</p>
                                @if (count($downloads) > 0)
                                @foreach ($downloads as $y)
                                <p>{{ $y->judul }} <strong><a href="{{ $y->link }}">Download</a></strong></p>
                                @endforeach
                                @else
                                <p>Paduan Belum Ditambahkan</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <!-- JIka Kategori Download Tidak ada -->
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="p-5 bg-primary text-white">
    <h1>Seleksi Jalur Tes</h1>
    <p>Seleksi Jalur Tes (SJT) merupakan jalur seleksi melalui tes akademik bagi calon mahasiswa baru yang dapat diikuti oleh lulusan SMA/SMK/MA tahun 2021, 2022, atau 2023.</p>
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
                                <p class="h3 text-bold">PERSYARATAN PESERTA</p>
                                <ol>
                                    <li>Calon mahasiswa diperbolehkan memilih lebih dari satu program studi;</li>
                                    <li>Wajib mengunggah portofolio;</li>
                                    <li>Warga Negara Indonesia (WNI);</li>
                                    <li>Lulusan tahun 2021, 2022, atau 2023;</li>
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
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <p class="h3 text-bold">Pilihan Program Studi</p>
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
                                            <li>Teknik mesin: produksi, las, fabrikasi logam, gambar mesin, pemeliharaan mekanik industri dan teknik pengecoran.</li>
                                            <li>Teknik otomotif: Teknik kendaraan ringan, sepeda motor, body otomotif, alat berat dan ototronik.</li>
                                            <li>Teknik listrik: transmisi tenaga listrik, pembangkit tenaga listrik, distribusi tenaga listrik, instalasi tenaga listrik dan otomatisasi industri.</li>
                                            <li>Teknik elektronika: elektronika industri dan teknik mekatronik (kecuali teknik audio video) Teknik pendingin dan tata udara.</li>
                                            <li>Teknik perkapalan: keahlian instalasi permesinan kapal dan teknik listrik kapal Jurusan instrumentasi industri program keahlian kontrol proses dan kontrol mekanik.</li>
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

                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body text-center">
                                <p class="h3 text-bold">Tes Akademik</p>
                                <p>Tes akademik dilaksanakan melalui online menggunakan platform yang disediakan khusus.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body text-center">
                                <p class="h3 text-bold">Portofolio</p>
                                <p>Portofolio terdiri atas:</p>
                                <p>Portofolio</p>
                                <p>Tes Kesehatan</p>
                                <p>Wawancara</p>
                                <p>Psikotes</p>
                                <p>Tes Kesamaptaan</p>
                                <p>Informasi Umum Portofolio (diklik ngelink ke informasi umum portofolio)</li>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <p class="h3 text-bold">Tahapan Pendaftaran </p>
                                <ol>
                                    <li>Membuat akun SPMB Polimarin.</li>
                                    <li>Login menggunakan akun SPMB Polimarin.</li>
                                    <li>Melengkapi data diri.</li>
                                    <li>Mengunggah dokumen pendukung seperti KTP, Akta Kelahiran, Sertifikat Toefl, dan KIP Kuliah (bagi pendaftar KIP Kuliah).</li>
                                    <li>Memilih program studi sesuai dengan jurusan asal sekolah.</li>
                                    <li>Melakukan pembayaran biaya tes akademik dan tes kekhususan dengan kode pembayaran Virtual Account (VA) BNI yang tercantum pada akun SPMB Polimarin (pembayaran dapat dilakukan melalui teller, ATM, internet banking, atau mobile banking BNI).</li>
                                    <li>Mengunggah portofolio tes kekhususan (tes kesehatan, wawancara, psikotes, dan tes kesamaptaan).</li>
                                    <li>Mengikuti tes akademik yang dilakukan secara online pada tanggal dan waktu yang sudah ditentukan.</li>
                                    <li>Hasil seleksi diumumkan pada tanggal 21 Juni 2023 melalui akun SPMB Polimarin.</li>
                                    <li>Peserta yang dinyatakan lolos Seleksi Jalur Tes (SJT), melaksanakan daftar ulang pada tanggal 21-28 Juni 2023 dengan melakukan pembayaran biaya daftar ulang (biaya UKT sesuai program studi dan biaya hidup di asrama) dengan pembayaran kode Virtual Account (VA) BNI serta biaya seragam yang dibayar melalui rekening Koperasi Usaha Prima Mandiri dan melengkapi data daftar ulang:</li>
                                    <ul>

                                        <li>Kartu identitas diri (KTP/SIM/Paspor);</li>
                                        <li>Akta Kelahiran;</li>
                                        <li>Surat Pernyataan calon mahasiswa (bermeterai 10.000);</li>
                                        <li>Surat Keterangan Catatan Kepolisian (SKCK);</li>
                                        <li>Kartu Indonesia Sehat (KIS)/bukti pendaftaran KIS (bagi yang belum mempunyai KIS);</li>
                                        <li>Pasfoto diri berwarna terbaru;</li>
                                        <li>Kartu Indonesia Pintar (KIP) Kuliah (bagi peserta yang mendaftar kepesertaan KIP-Kuliah)</li>
                                    </ul>
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
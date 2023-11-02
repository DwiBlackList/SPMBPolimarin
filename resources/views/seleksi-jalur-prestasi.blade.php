@extends('layouts.app')

@section('content')
<!-- Paling atas -->
<div class="p-5 bg-primary text-white">
    <h1>Seleksi Jalur Prestasi</h1>
    <p>Seleksi Jalur Prestasi merupakan jalur seleksi tanpa tes tertulis bagi calon mahasiswa baru melalui bidang akademik atau minat bakat tertentu. Seleksi berdasarkan pencapaian prestasi akademik (nilai rapor) semester 1 sampai dengan 5. Selain itu jalur ini juga ditujukan bagi calon mahasiswa yang memiliki prestasi (pernah menjadi juara atau finalis di berbagai lomba di tingkat nasional atau provinsi atau kabupaten dalam kurun waktu 3 tahun terakhir) di berbagai bidang seperti olahraga, seni, budaya, dan penalaran (misal olimpiade, karya ilmiah, debat, dan lain-lain).</p>
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
                                    <li>Siswa tahun terakhir pada pendidikan menengah yang akan lulus pada tahun 2023;</li>
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
                                <p>Tes Kesehatan</p>
                                <p>Wawancara</p>
                                <p>Psikotes</p>
                                <p>Tes Kesamaptaan</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <p class="h3 text-bold">Tahapan Pendaftaran </p>
                                <ol>
                                    <li>Membuat akun SPMB Polimarin</li>
                                    <li>Login menggunakan akun SPMB Polimarin</li>
                                    <li>Melakukan pembayaran biaya tes kekhususan (portofolio) dengan kode pembayaran Virtual Account (VA) BNI yang tercantum pada akun SPMB Polimarin (pembayaran dapat dilakukan melalui teller, ATM, internet banking, atau mobile banking BNI).</li>
                                    <li>Melengkapi data diri dan mengupload nilai rapor semester 1-5 dan prestasi (bukti kejuaraan/sertifikat/piagam/surat keterangan yang diperoleh).</li>
                                    <li>Mengunggah portofolio tes kekhususan (tes kesehatan, wawancara, psikotes, dan tes kesamaptaan).</li>
                                    <li>Hasil seleksi diumumkan pada tanggal 28 Maret 2023 melalui akun SPMB Polimarin</li>
                                    <li>Peserta yang dinyatakan lolos Seleksi Jalur Prestasi (SJP), melaksanakan daftar ulang dengan melakukan pembayaran biaya daftar ulang (biaya UKT sesuai program studi, biaya hidup di asrama, dan biaya seragam) dengan kode pembayaran Virtual Account (VA) BNI dan melengkapi data daftar ulang:</li>
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

                    <div class="col-12 mb-5">
                        <div class="card">
                            <div class="card-body text-center">
                                <p class="h3 text-bold">Download Paduan</p>
                                <p>Panduan Pendaftaran Seleksi Jalur Prestasi <strong>download</strong></p>
                                <p>Panduan Tes Kekhususan:</strong></p>
                                <p>Panduan Tes Kesamaptaan Polimarin <strong>download</strong></p>
                                <p>Panduan Tes Kesehatan Polimarin <strong>download</strong></p>
                                <p>Panduan Psikotes <strong>download</strong></p>
                                <p>Panduan Wawancara <strong>download</strong></p>
                                <p>Lampiran Tes kekhususan yang harus dicetak:</strong></p>
                                <p>Lampiran 1 (Surat Pernyataan Tes Kekhususan) <strong>download</strong></p>
                                <p>Lampiran 2 (Hasil Tes Kesamaptaan) <strong>download</strong></p>
                                <p>Lampiran 3 (Dokumen Pemeriksaan Kesehatan) <strong>download</strong></p>
                                <p>Lampiran 4 (Surat Pernyataan Tes Kesehatan) <strong>download</strong></p>
                                <p>Lampiran 5 (Formulir Wawancara Keuangan) <strong>download</strong></p>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
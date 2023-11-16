@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-10">
            <p class="h1">Data Download</p>
            <p>Data Download Yang Akan Terubah Adalah Halaman Download , Persyaratan , Seleksi Jalur Prestasi + Tes + Mandiri , Tes Kekhususan</p>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6"></div>
                    <div class="col-12 col-md-6"></div>
                </div>
            </div>
            <!-- <img src="{{ asset('img/download.png') }}" class="img-fluid rounded" alt=""> -->
            <!-- <img src="{{ asset('img/download2.png') }}" class="img-fluid rounded" alt=""> -->
            <hr>
            <p>NB : </p>
            <ul>
                <li>Kategori Yang Harus Ada :</li>
                <ol>
                    <li>Persyaratan</li>
                    <li>Seleksi Jalur Prestasi</li>
                    <li>Seleksi Jalur Tes</li>
                    <li>Seleksi Jalur Mandiri</li>
                    <li>Tes Kekhususan</li>
                </ol>
                <li>Jika Kategori Point No 1 Tidak ada , maka pada halaman tersebut tidak ada menu download</li>
                <li>Kategori Diluar Point No 1 Akan Masuk Ke Kategori Yang Hanya Ditampilkan Di Halaman Download</li>
                <li>Pemilihan Kategori Bisa Lebih Dari 1 Kategori</li>
                <li>Jika Terdapat Data Download Dengan Lebih Dari 2 Kategori , Dan Ingin Di Hapus / Edit Maka Data Tersebut Akan Terhapus / Teredit Di Semua Kategori</li>
                <li>Jika Kategori Dihapus Maka Data Download Dengan Kategori Tersebut Akan Terhapus , Baik Dengan Data Download 1 Kategori ataupun lebih dari 1 Kategori Data Download Tersebut Akan Terhapus</li>
            </ul>
            <hr>

            <button data-bs-toggle="modal" data-bs-target="#tambahDownload" class="btn btn-success">Create Data Download</button>
            <button data-bs-toggle="modal" data-bs-target="#tambahKategori" class="btn btn-success">Create Data Kategori</button>

            <!-- The Modal Download -->
            <form action="{{ route('download.store') }}" method="post">
                @csrf
                <div class="modal" id="tambahDownload">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Data Download</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <p>Judul :</p>
                                <input type="text" name="judul" placeholder="Judul..." class="form-control" required>
                                <hr>
                                <p>Deskripsi :</p>
                                <input type="text" name="deskripsi" placeholder="Deskripsi..." class="form-control" required>
                                <hr>
                                <p>Link :</p>
                                <input type="text" name="link" placeholder="Link..." class="form-control" required>
                                <hr>
                                <p>Kategori</p>
                                @foreach( $kategori as $x )
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="id_download_kategori[]" value="{{ $x->id }}">
                                    <label class="form-check-label">{{ $x->nama_kategori }}</label>
                                </div>
                                @endforeach
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-success" value="Simpan">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
            <!-- End Modal Tambah -->

            <!-- The Modal Kategori -->
            <form action="{{ route('downloadkategori.store') }}" method="post">
                @csrf
                <div class="modal" id="tambahKategori">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Data Kategori ii</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <p>Nama Kategori :</p>
                                <input type="text" name="nama_kategori" placeholder="Seleksi Jalur Tes" class="form-control" required>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-success" value="Simpan">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
            <!-- End Modal Tambah -->

            <br>

            <p class="h2">Kategori</p>
            <hr width="15%" style="border-width: 5px;">
            <div class="table-responsive">
                <table class="table table-striped">
                    @if (count($kategori) > 0)
                    @foreach ($kategori as $x)
                    <tr>
                        <td>{{ $x->nama_kategori }}</td>
                        <td>
                            <button id="editDataKategori" data-toggle="modal" data-target='#editModalKategori' data-id="{{ $x->id }}" class="btn btn-warning">Edit</button>
                        </td>
                        <td>
                            <button id="deleteDataKategori" data-toggle="modal" data-target='#deleteModal' data-id="{{ $x->id }}" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="h3 text-bold">Data Kategori Tidak Tersedia</td>
                    </tr>
                    @endif
                </table>
            </div>

            <p class="h2">Download</p>
            <hr width="15%" style="border-width: 5px;">
            @if (count($kategori) > 0)
            @foreach ($kategori as $x)
            @php
            $downloads = App\Models\Download::where('id_download_kategori', 'like', '%' . $x->id . '%')->get();
            @endphp

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td colspan="5" class="text-bold">{{ $x->nama_kategori }}</td>
                    </tr>
                    @if (count($downloads) > 0)
                    @foreach ($downloads as $y)
                    <tr>
                        <td>{{ $y->judul }}</td>
                        <td>{{ $y->deskripsi }}</td>
                        <td>{{ $y->link }}</td>
                        <td>
                            <button id="editDataDownload" data-toggle="modal" data-target='#editModalDownload' data-id="{{ $y->id }}" class="btn btn-warning">Edit</button>
                        </td>
                        <td>
                            <button id="deleteDataDownload" data-toggle="modal" data-target='#deleteModal' data-id="{{ $y->id }}" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="h3 text-bold">Data Download Tidak Tersedia</td>
                    </tr>
                    @endif
                </table>
            </div>
            @endforeach
            @else
            <p class="h3 text-bold">Data Kategori Tidak Tersedia</p>
            @endif



        </div>
    </div>
</div>


<!-- Modal Edit Download -->
<div class="modal fade" id="editModalDownload">
    <div class="modal-dialog">
        <form id="ModalData">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Download</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="modal-body">
                        <p>Judul :</p>
                        <input type="text" name="judul" id="judul" value="" class="form-control" required>
                        <hr>
                        <p>Deskripsi :</p>
                        <input type="text" name="deskripsi" id="deskripsi" value="" placeholder="Deskripsi..." class="form-control" required>
                        <hr>
                        <p>Link :</p>
                        <input type="text" name="link" id="link" value="" placeholder="Link..." class="form-control" required>
                        <hr>
                        <p>Kategori</p>
                        @foreach( $kategori as $x )
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="id_download_kategori[]" value="{{ $x->id }}">
                            <label class="form-check-label">{{ $x->nama_kategori }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <input type="submit" value="Submit" id="submitDownload" class="btn btn-success">

                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit Kategori -->
<div class="modal fade" id="editModalKategori">
    <div class="modal-dialog">
        <form id="ModalData">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Kategori</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                    <div class="modal-body">
                        <p>Nama Kategori :</p>
                        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <input type="submit" value="Submit" id="submitKategori" class="btn btn-success">

                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>


@if (Session::has('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: "{{ Session::get('success') }}",
    });
</script>
@endif
@if (Session::has('failed'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Failed!',
        text: "{{ Session::get('failed') }}",
    });
</script>
@endif
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '#submitKategori', function(event) {
            event.preventDefault()
            var id = $("#id").val();
            var nama_kategori = $("#nama_kategori").val();

            $.ajax({
                url: 'downloadkategori/' + id,
                type: "PUT",
                data: {
                    id: id,
                    nama_kategori: nama_kategori,
                },
                dataType: 'json',
                success: function(data) {

                    $('#ModalData').trigger("reset");
                    $('#editModalKategori').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: "{{ Session::get('success') }}",
                        showConfirmButton: false,
                    });
                    window.location.reload(true);
                }
            });
        });

        $('body').on('click', '#editDataKategori', function(event) {

            event.preventDefault();
            var id = $(this).data('id');
            console.log(id)
            $.get('downloadkategori/' + id + '/edit', function(data) {
                $('#userCrudModal').html("Update Data");
                $('#submitKategori').val("Update Data");
                $('#editModalKategori').modal('show');
                $('#id').val(data.data.id);
                $('#nama_kategori').val(data.data.nama_kategori);
            })
        });


        $('body').on('click', '#submitDownload', function(event) {
            event.preventDefault();

            var id = $("#id").val();
            var judul = $("#judul").val();
            var deskripsi = $("#deskripsi").val();
            var link = $("#link").val();

            // Serialize form data, including checked checkboxes
            var formData = $("#ModalData").serializeArray();

            $.ajax({
                url: 'download/' + id,
                type: "PUT",
                data: formData,
                dataType: 'json',
                success: function(data) {
                    $('#ModalData').trigger("reset");
                    $('#editModalDownload').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: "{{ Session::get('success') }}",
                        showConfirmButton: false,
                    });
                    window.location.reload(true);
                }
            });
        });




        $('body').on('click', '#editDataDownload', function(event) {

            event.preventDefault();
            var id = $(this).data('id');
            console.log(id)
            $.get('download/' + id + '/edit', function(data) {
                $('#userCrudModal').html("Update Data");
                $('#submitDownload').val("Update Data");
                $('#editModalDownload').modal('show');
                $('#id').val(data.data.id);
                $('#judul').val(data.data.judul);
                $('#deskripsi').val(data.data.deskripsi);
                $('#link').val(data.data.link);

                // Loop through categories and check the selected ones
                $('input[name="id_download_kategori[]"]').each(function() {
                    var categoryId = $(this).val();
                    $(this).prop('checked', data.data.id_download_kategori.includes(categoryId));
                });
            })
        });
    });


    $('body').on('click', '#deleteDataKategori', function(event) {

        var id = $(this).data('id');
        console.log(id)

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "Yakin Ingin Menghapus Data",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'downloadkategori/' + id,
                    type: "DELETE",
                    data: {
                        id: id,
                    },
                    dataType: 'json',
                    success: function(data) {
                        swalWithBootstrapButtons.fire(
                            'Deleted!',
                            'Data Telah Dihapus.',
                            'success'
                        )
                        window.location.reload(true);
                    }
                });

            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Data Tidak Dihapus',
                    'error'
                )
            }
        })

    });

    $('body').on('click', '#deleteDataDownload', function(event) {

        var id = $(this).data('id');
        console.log(id)

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "Yakin Ingin Menghapus Data",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'download/' + id,
                    type: "DELETE",
                    data: {
                        id: id,
                    },
                    dataType: 'json',
                    success: function(data) {
                        swalWithBootstrapButtons.fire(
                            'Deleted!',
                            'Data Telah Dihapus.',
                            'success'
                        )
                        window.location.reload(true);
                    }
                });

            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Data Tidak Dihapus',
                    'error'
                )
            }
        })

    });
</script>
@endsection
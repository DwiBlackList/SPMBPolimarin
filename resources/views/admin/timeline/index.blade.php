@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-10">
            <p class="h1">Data Timeline</p>
            <p>Data Timeline Yang Akan Terubah Adalah Halaman Utama , Jadwal Pendaftaran</p>
            <img src="{{ asset('img/timeline.png') }}" class="img-fluid rounded" alt="">
            <img src="{{ asset('img/timeline2.png') }}" class="img-fluid rounded" alt="">
            <hr>
            <p>NB : </p>
            <ul>
                <li>Orange Untuk Kategori</li>
                <li>Hijau Untuk Timeline</li>
            </ul>
            <hr>

            <button data-bs-toggle="modal" data-bs-target="#tambahTimeline" class="btn btn-success">Create Data Timeline</button>
            <button data-bs-toggle="modal" data-bs-target="#tambahKategori" class="btn btn-success">Create Data Kategori</button>

            <!-- The Modal Timeline -->
            <form action="{{ route('timeline.store') }}" method="post">
                @csrf
                <div class="modal" id="tambahTimeline">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Data Timeline</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <p>Nama Kegiatan :</p>
                                <input type="text" name="nama_kegiatan" placeholder="Pendaftaran" class="form-control" required>
                                <hr>
                                <p>Tanggal :</p>
                                <input type="text" name="tanggal" placeholder="1 Oktober 2021 - 2 Desember 2022" class="form-control" required>
                                <hr>
                                <p>Kategori</p>
                                <select name="id_kategori" required class="form-select">
                                    <option value="" selected disabled>Pilih Kategori</option>
                                    @foreach( $kategori as $x )
                                    <option value="{{ $x->id }}">{{ $x->nama_kategori }}</option>
                                    @endforeach
                                </select>
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
            <form action="{{ route('kategori.store') }}" method="post">
                @csrf
                <div class="modal" id="tambahKategori">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Data Kategori</h4>
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


            <p class="h2">Timeline</p>
            <hr width="15%" style="border-width: 5px;">
            @if (count($kategori) > 0)
            @foreach ($kategori as $x)
            @php $timelines = App\Models\Timeline::all()->where('id_kategori' , '=' , $x->id) @endphp
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <td colspan="5" class="text-bold">{{ $x->nama_kategori }}</td>
                    </tr>
                    @if (count($timelines) > 0)
                    @foreach ($timelines as $y)
                    <tr>
                        <td>{{ $y->nama_kegiatan }}</td>
                        <td>:</td>
                        <td>{{ $y->tanggal }}</td>
                        <td>
                            <button id="editDataTimeline" data-toggle="modal" data-target='#editModalTimeline' data-id="{{ $y->id }}" class="btn btn-warning">Edit</button>
                        </td>
                        <td>
                            <button id="deleteDataTimeline" data-toggle="modal" data-target='#deleteModal' data-id="{{ $y->id }}" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="h3 text-bold">Data Timeline Tidak Tersedia</td>
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


<!-- Modal Edit Timeline -->
<div class="modal fade" id="editModalTimeline">
    <div class="modal-dialog">
        <form id="ModalData">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Timeline</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="modal-body">
                        <p>Nama Kegiatan :</p>
                        <input type="text" name="nama_kegiatan" id="nama_kegiatan" value="" class="form-control" required>
                        <hr>
                        <p>Tanggal :</p>
                        <input type="text" name="tanggal" id="tanggal" value="" class="form-control" required>
                        <hr>
                        <p>Kategori</p>
                        <select name="id_kategori" id="id_kategori" required class="form-select">
                            <option value="" selected disabled>Pilih Kategori</option>
                            @foreach( $kategori as $x )
                            <option value="{{ $x->id }}">{{ $x->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <input type="submit" value="Submit" id="submitTimeline" class="btn btn-success">

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
                url: 'kategori/' + id,
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
            $.get('kategori/' + id + '/edit', function(data) {
                $('#userCrudModal').html("Update Data");
                $('#submitKategori').val("Update Data");
                $('#editModalKategori').modal('show');
                $('#id').val(data.data.id);
                $('#nama_kategori').val(data.data.nama_kategori);
            })
        });


        $('body').on('click', '#submitTimeline', function(event) {
            event.preventDefault()
            var id = $("#id").val();
            var nama_kegiatan = $("#nama_kegiatan").val();
            var tanggal = $("#tanggal").val();
            var id_kategori = $("#id_kategori").val();

            $.ajax({
                url: 'timeline/' + id,
                type: "PUT",
                data: {
                    id: id,
                    nama_kegiatan: nama_kegiatan,
                    tanggal: tanggal,
                    id_kategori: id_kategori,
                },
                dataType: 'json',
                success: function(data) {

                    $('#ModalData').trigger("reset");
                    $('#editModalTimeline').modal('hide');
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

        $('body').on('click', '#editDataTimeline', function(event) {

            event.preventDefault();
            var id = $(this).data('id');
            console.log(id)
            $.get('timeline/' + id + '/edit', function(data) {
                $('#userCrudModal').html("Update Data");
                $('#submitTimeline').val("Update Data");
                $('#editModalTimeline').modal('show');
                $('#id').val(data.data.id);
                $('#nama_kegiatan').val(data.data.nama_kegiatan);
                $('#tanggal').val(data.data.tanggal);
                $('#id_kategori').val(data.data.id_kategori);
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
                    url: 'kategori/' + id,
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

    $('body').on('click', '#deleteDataTimeline', function(event) {

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
                    url: 'timeline/' + id,
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
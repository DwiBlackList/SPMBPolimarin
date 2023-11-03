@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-10">
            <p class="h1">Data Jadwal</p>
            <p>Jadwal Yang Akan Terubah Adalah Halaman Utama</p>
            <img src="{{ asset('img/jadwal.png') }}" class="img-fluid rounded" alt="">
            <hr>

            <button data-bs-toggle="modal" data-bs-target="#tambah" class="btn btn-success">Create Data</button>
            <!-- The Modal -->
            <form action="{{ route('jadwal.store') }}" method="post">
                @csrf
                <div class="modal" id="tambah">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Data Jadwal</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                <p>Nama Jalur :</p>
                                <input type="text" name="nama_jalur" placeholder="Selesi Jalur Tes" class="form-control" required>
                                <hr>
                                <p>Tanggal :</p>
                                <input type="text" name="tanggal" placeholder="1 Oktober 2021 - 2 Desember 2022" class="form-control" required>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-success" value="simpan">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>
            <!-- End Modal Tambah -->
                
            <br>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td>Nama Jalur</td>
                        <td>Tanggal</td>
                        <td colspan="2">Auction</td>
                    </tr>
                    @if (count($jadwal) > 0)
                    @foreach ($jadwal as $x)
                    <tr>
                        <td>{{ $x->nama_jalur }}</td>
                        <td>{{ $x->tanggal }}</td>
                        <td>
                            <button id="editData" data-toggle="modal" data-target='#editModal' data-id="{{ $x->id }}" class="btn btn-warning">Edit</button>
                        </td>
                        <td>
                            <button id="deleteData" data-toggle="modal" data-target='#deleteModal' data-id="{{ $x->id }}" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="4" class="h3 text-bold">No data available</td>
                    </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal Edit -->
<div class="modal fade" id="editModal">
    <div class="modal-dialog">
        <form id="ModalData">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Jadwal</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="modal-body">
                        <p>Nama Jalur :</p>
                        <input type="text" name="nama_jalur" id="nama_jalur" value="" class="form-control" required>
                        <hr>
                        <p>Tanggal :</p>
                        <input type="text" name="tanggal" id="tanggal" value="" class="form-control" required>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <input type="submit" value="Submit" id="submit" class="btn btn-success">

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

        $('body').on('click', '#submit', function(event) {
            event.preventDefault()
            var id = $("#id").val();
            var nama_jalur = $("#nama_jalur").val();
            var tanggal = $("#tanggal").val();

            $.ajax({
                url: 'jadwal/' + id,
                type: "PUT",
                data: {
                    id: id,
                    nama_jalur: nama_jalur,
                    tanggal: tanggal,
                },
                dataType: 'json',
                success: function(data) {

                    $('#ModalData').trigger("reset");
                    $('#editModal').modal('hide');
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

        $('body').on('click', '#editData', function(event) {

            event.preventDefault();
            var id = $(this).data('id');
            console.log(id)
            $.get('jadwal/' + id + '/edit', function(data) {
                $('#userCrudModal').html("Update Data");
                $('#submit').val("Update Data");
                $('#editModal').modal('show');
                $('#id').val(data.data.id);
                $('#nama_jalur').val(data.data.nama_jalur);
                $('#tanggal').val(data.data.tanggal);
            })
        });



    });


    $('body').on('click', '#deleteData', function(event) {

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
                    url: 'jadwal/' + id,
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
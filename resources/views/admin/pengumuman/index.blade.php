@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-10">
            <p class="h1">Data Pengumuman</p>
            <p>Pengumuman Yang Akan Terubah Adalah Halaman Utama</p>
            <img src="{{ asset('img/pengumuman.png') }}" class="img-fluid rounded" alt="">
            <hr>

            <a href="{{ route('pengumuman.create') }}" class="btn btn-success">Create Data</a>

            <br>
            <br>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td>Judul</td>
                        <td>Sub Judul</td>
                        <td colspan="3">Auction</td>
                    </tr>
                    @if (count($pengumuman) > 0)
                    @foreach ($pengumuman as $x)
                    <tr>
                        <td>{{ $x->judul }}</td>
                        <td>{{ $x->subjudul }}</td>
                        <td>
                            <a href="{{ route('pengumuman.show' , $x->id) }}" class="btn btn-success">Preview</a>
                        </td>
                        <td>
                            <a href="{{ route('pengumuman.edit' , $x->id) }}" class="btn btn-warning">Edit</a>
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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
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
                    url: 'pengumuman/' + id,
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
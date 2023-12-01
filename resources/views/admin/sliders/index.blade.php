@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-10">
            <p class="h1">Slider</p>
            <hr>

            <button data-bs-toggle="modal" data-bs-target="#tambah" class="btn btn-success">Tambah Gambar</button>
            <!-- The Modal -->
            <form action="{{ route('sliders.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal" id="tambah">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Gambar Slider</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                <p>Gambar :</p>
                                <input type="file" name="gambar" class="form-file" required>
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
                        <td>Gambar</td>
                        <td colspan="2">Auction</td>
                    </tr>
                    @if (count($sliders) > 0)
                    @foreach ($sliders as $x)
                    <tr>
                        <td><img src="{{ asset($x->gambar) }}" alt="" width="50%"></td>
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
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
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
                    url: 'sliders/' + id,
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
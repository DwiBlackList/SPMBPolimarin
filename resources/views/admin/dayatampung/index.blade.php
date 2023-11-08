@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-10">
            <p class="h1">Data Daya Tampung</p>
            <p>Daya Tampung Yang Akan Terubah Adalah Halaman Utama</p>
            <img src="{{ asset('img/dayatampung.png') }}" class="img-fluid rounded" alt="">
            <hr>

            <a href="{{ route('daya-tampung.create') }}" class="btn btn-success">Create Data</a>

            <br>
            <br>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th rowspan="2">Kelas Di Program Studi</th>
                        <th rowspan="2">Data Tampung Kelas</th>
                        <th rowspan="2">Daya Tampung Mahasiswa</th>
                        <th colspan="3">Jalur Seleksi</th>
                        <th colspan="2" rowspan="2">Action</th>
                    </tr>
                    <tr>
                        <th>Prestasi</th>
                        <th>Tes</th>
                        <th>Mandiri</th>
                    </tr>
                    @if (count($dayatampung) > 0)
                    @foreach ($dayatampung as $x)
                    <tr>
                        <td>{{ $x->program_studi }}</td>
                        <td>{{ $x->daya_tampung_kelas }}</td>
                        <td>{{ $x->daya_tampung_mahasiswa }}</td>
                        <td>{{ $x->jalur_prestasi }}</td>
                        <td>{{ $x->jalur_tes }}</td>
                        <td>{{ $x->jalur_mandiri }}</td>
                        <td>
                            <a href="{{ route('daya-tampung.edit' , $x->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <button id="deleteData" data-toggle="modal" data-target='#deleteModal' data-id="{{ $x->id }}" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>Jumlah</td>
                        <td>{{ $total_daya_tampung_kelas }}</td>
                        <td>{{ $total_daya_tampung_mahasiswa }}</td>
                        <td>{{ $total_jalur_prestasi }}</td>
                        <td>{{ $total_jalur_tes }}</td>
                        <td>{{ $total_jalur_mandiri }}</td>
                        <td colspan="2"></td>
                    </tr>
                    @else
                    <tr>
                        <td colspan="7" class="h3 text-bold">No data available</td>
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
                    url: 'daya-tampung/' + id,
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
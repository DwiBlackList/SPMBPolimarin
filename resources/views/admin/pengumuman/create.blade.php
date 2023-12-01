@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('pengumuman.store') }}" method="post">
                @csrf
                <p class="h1">Tambah Pengumuman</p>
                <hr>
                <p>Judul</p>
                <input type="text" class="form-control" name="judul" placeholder="Judul Pengumuman" required>
                <hr>
                <p>Sub Judul</p>
                <input type="text" class="form-control" name="subjudul" placeholder="Sub Judul Pengumuman" required>
                <hr>
                <p>Isi</p>
                <textarea name="isi" required></textarea>
                <hr>
                <input type="submit" class="btn btn-success" value="Simpan">
            </form>
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
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>
@endsection
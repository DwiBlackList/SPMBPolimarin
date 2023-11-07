@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('pengumuman.update' , $pengumuman->id) }}">
                @csrf
                @method('PUT')
                <p class="h1">Edit Pengumuman</p>
                <hr>
                <p>Judul</p>
                <input type="text" class="form-control" value="{{ $pengumuman->judul }}" name="judul" placeholder="Judul Pengumuman" required>
                <hr>
                <p>Sub Judul</p>
                <input type="text" class="form-control" value="{{ $pengumuman->subjudul }}" name="subjudul" placeholder="Judul Pengumuman" required>
                <hr>
                <p>Isi</p>
                <textarea name="isi" required>{{ $pengumuman->isi }}</textarea>
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
        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        // mergetags_list: [{
        //         value: 'First.Name',
        //         title: 'First Name'
        //     },
        //     {
        //         value: 'Email',
        //         title: 'Email'
        //     },
        // ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
</script>
@endsection
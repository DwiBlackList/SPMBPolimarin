@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('daya-tampung.update' , $dayatampung->id) }}">
                @csrf
                @method('PUT')
                <p class="h1">Tambah Daya Tampung</p>
                <hr>
                <p>Program Studi</p>
                <input type="text" class="form-control" value="{{ $dayatampung->program_studi }}" name="program_studi" placeholder="Program Studi " required>
                <hr>
                <p>Daya Tampung Kelas</p>
                <input type="number" class="form-control" value="{{ $dayatampung->daya_tampung_kelas }}" name="daya_tampung_kelas" placeholder="Jumlah Daya Tampung Kelas" required>
                <hr>
                <p>Daya Tampung Mahasiswa</p>
                <input type="number" class="form-control" value="{{ $dayatampung->daya_tampung_mahasiswa }}" name="daya_tampung_mahasiswa" placeholder="Jumlah Daya Tampung Mahasiswa" required>
                <hr>
                <p>Jalur Prestasi</p>
                <input type="number" class="form-control" value="{{ $dayatampung->jalur_prestasi }}" name="jalur_prestasi" placeholder="Jumlah Daya Tampung Jalur Prestasi" required>
                <hr>
                <p>Jalur Tes</p>
                <input type="number" class="form-control" value="{{ $dayatampung->jalur_tes }}" name="jalur_tes" placeholder="Jumlah Daya Tampung Jalur Tes" required>
                <hr>
                <p>Jalur Mandiri</p>
                <input type="number" class="form-control" value="{{ $dayatampung->jalur_mandiri }}" name="jalur_mandiri" placeholder="Jumlah Daya Tampung Jalur Mandiri" required>
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
@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('settings.update' , $settings->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <p class="h1">Edit Settings Website</p>
                <hr>
                <p>Nama</p>
                <input type="text" class="form-control" value="{{ $settings->nama_web }}" name="nama_web" placeholder="Nama Website" required>
                <p>PMB .....</p>
                <hr>
                <p>Deskripsi</p>
                <textarea name="deskripsi" required>{{ $settings->deskripsi }}</textarea>
                <p>Deskripsi Web. Bagian Bawah Slider</p>
                <hr>
                <p>Icon</p>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <input type="file" class="form-control" value="{{ $settings->icon }}" name="icon">
                    </div>
                    <div class="col-12 col-md-6">
                        Icon Saat Ini :
                        <img src="{{ asset($settings->icon) }}" alt="">
                    </div>
                </div>
                <p>Icon Website</p>
                <hr>
                <p>Logo</p>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <input type="file" class="form-control" value="{{ $settings->logo }}" name="logo">
                    </div>
                    <div class="col-12 col-md-6">
                        Logo Saat Ini :
                        <img src="{{ asset($settings->logo) }}" alt="">
                    </div>
                </div>
                <p>Logo Website</p>
                <hr>
                <p>Gambar WA Live Chat</p>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <input type="file" class="form-control" value="{{ $settings->gambar_wa }}" name="gambar_wa">
                    </div>
                    <div class="col-12 col-md-6">
                        Logo Saat Ini :
                        <img src="{{ asset($settings->gambar_wa) }}" alt="">
                    </div>
                </div>
                <p>Minimal PNG ukuran gambar di sesuaikan</p>
                <hr>
                <p>Google Map</p>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <textarea class="form-control" name="google_map" required>{{ $settings->google_map }}</textarea>
                    </div>
                    <div class="col-12 col-md-6">
                        GMap Saat Ini :
                        {!! $settings->google_map !!}
                    </div>
                </div>
                <p>< iframe >.....</ iframe ></p>
                <hr>
                <p>Alamat</p>
                <div class="row">
                    <textarea class="form-control" name="alamat" required>{{ $settings->alamat }}</textarea>
                </div>
                <p>Jl......</p>
                <hr>
                <p>Nomor Telp</p>
                <textarea class="form-control" name="notelp" required>{{ $settings->notelp }}</textarea>
                <p>08......</p>
                <hr>
                <p>Nomor Telp</p>
                <input class="form-control" name="nowa" required value="{{ $settings->nowa }}">
                <p>Link Live Chat WA (berawalan 62.....)</p>
                <hr>
                <p>Halaman</p>
                <input class="form-control" name="halaman" required value="{{ $settings->halaman }}">
                <p>polimarin.ac.id, Pos-el info@polimarin.ac.id</p>
                <hr>
                <p>Kontak Email</p>
                <input class="form-control" name="kontak_email" required value="{{ $settings->kontak_email }}">
                <p>pmb@polimarin.ac.id</p>
                <hr>
                <p>Link FB</p>
                <input type="text" class="form-control" value="{{ $settings->link_fb }}" name="link_fb" placeholder="Link FB" required>
                <p>https:......</p>
                <hr>
                <p>Link Twitter</p>
                <input type="text" class="form-control" value="{{ $settings->link_twitter }}" name="link_twitter" placeholder="Program Studi " required>
                <p>https:......</p>
                <hr>
                <p>Link Instagram</p>
                <input type="text" class="form-control" value="{{ $settings->link_instagram }}" name="link_instagram" placeholder="Program Studi " required>
                <p>https:......</p>
                <hr>
                <input type="submit" class="btn btn-success" value="Update">
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
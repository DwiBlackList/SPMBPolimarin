@php
$settings = \App\Models\Settings::findOrFail(1);
@endphp

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $settings->nama_web }}</title>
    <link rel="icon" href="{{ asset($settings->icon) }}" type="image/x-icon">

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.bunny.net"> -->
    <!-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->

    <!-- Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <!-- header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset($settings->logo) }}" width="50%" height="50%" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('program-studi') }}">Program Studi</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Informasi</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('jadwal-pendaftaran') }}">Jadwal Pendaftaran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('persyaratan') }}">Persyaratan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('alur-pendaftaran') }}">Alur Pendaftaran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('biaya') }}">Biaya</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('program-alih-jenjang') }}">Program Alih Jenjang (Transfer SKS)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('tes-kekhususan') }}">Tes Kekhususan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('downloads') }}">Download</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Jalur Seleksi</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('seleksi-jalur-prestasi') }}">Jalur Prestasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('seleksi-jalur-tes') }}">Jalur Tes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('seleksi-jalur-mandiri') }}">Jalur Mandiri</a>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('jadwal.index') }}">Jadwal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pengumuman.index') }}">Pengumuman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('timeline.index') }}">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('daya-tampung.index') }}">DayaTampung</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('download.index') }}">Download</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('settings.index') }}">Setting Utama</a>
                                <a class="dropdown-item" href="{{ route('sliders.index') }}">Setting Slider</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- konten -->
        <main class="">
            @yield('content')
        </main>

        <div class="floating-button">
            
            <a href="https://wa.me/{{ $settings->nowa }}" target="_blank" class=""><img src="{{ asset($settings->gambar_wa) }}" width="20%" height="20%" alt=""></a>
        </div>
        <!-- Footer -->
        <div class="container py-5">
            Copyright © 2023 pmb polimarin, All Rights Reserved.
        </div>
    </div>
</body>

<!-- Include jQuery from a CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.tiny.cloud/1/807dbzqb5t2mecju9htfi10af5vpbjqqi11avqry5dpopr8i/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</html>
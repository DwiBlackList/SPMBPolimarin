<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_web');
            $table->string('link_daftar');
            $table->text('deskripsi');
            $table->string('icon');
            $table->string('logo');
            $table->string('gambar_wa');
            $table->text('google_map');
            $table->string('alamat');
            $table->string('halaman');
            $table->string('kontak_email');
            $table->string('notelp');
            $table->string('nowa');
            $table->string('link_fb');
            $table->string('link_twitter');
            $table->string('link_instagram');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

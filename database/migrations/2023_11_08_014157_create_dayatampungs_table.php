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
        Schema::create('dayatampung', function (Blueprint $table) {
            $table->id();
            $table->string('program_studi');
            $table->string('daya_tampung_kelas');
            $table->string('daya_tampung_mahasiswa');
            $table->string('jalur_prestasi');
            $table->string('jalur_tes');
            $table->string('jalur_mandiri');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dayatampungs');
    }
};

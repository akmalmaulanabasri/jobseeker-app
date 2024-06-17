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
        Schema::create('postings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('judul_pekerjaan');
            $table->text('deskripsi_pekerjaan');
            $table->string('lokasi_pekerjaan');
            $table->string('gaji');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai')->nullable();
            $table->text('persyaratan_dan_kualifikasi');
            $table->enum('jenis_pekerjaan', ['kontrak', 'part time', 'full time']);
            $table->string('cara_menghubungi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postings');
    }
};

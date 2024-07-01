<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('worker_id');
            $table->string('luas_lahan');
            $table->text('alamat');
            $table->text('foto_lahan');
            $table->text('jasa');
            $table->text('keterangan');
            $table->date('tanggal');
            $table->time('jam');
            $table->enum('status', ['dipesan', 'dikonfirmasi', 'sedang_dikerjakan', 'pending_approve', 'selesai', 'dibatalkan'])->default('dipesan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

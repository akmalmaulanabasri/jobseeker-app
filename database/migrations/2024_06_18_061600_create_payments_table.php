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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->references('id')->on('users');
            // $table->foreignId('lamaran_id')->references('id')->on('lamarans');
            // // $table->foreignId('postingan_id')->references('id')->on('postingans');
            // $table->decimal('nominal', 8, 2);
            // $table->enum('status', ['paid ', 'unpaid '])->default('paid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

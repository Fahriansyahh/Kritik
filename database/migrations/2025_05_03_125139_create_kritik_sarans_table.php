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
        Schema::create('kritik_sarans', function (Blueprint $table) {
            $table->id('kritik_id');
            // Ubah referensi untuk foreign key pengirim_id
            $table->unsignedBigInteger('pengirim_id');
            $table->foreign('pengirim_id')->references('pengirim_id')->on('pengirims')->onDelete('cascade');

            // Transaksi ID
            $table->unsignedBigInteger('transaksi_id')->nullable();
            $table->foreign('transaksi_id')->references('transaksi_id')->on('transaksis')->onDelete('set null');

            // Kolom lainnya
            $table->text('isi_pesan');
            $table->enum('kepuasan', ['1', '2', '3', '4', '5'])->nullable();
            $table->timestamp('waktu_input')->useCurrent();
            $table->enum('status_tanggapan', ['belum_ditanggapi', 'ditanggapi'])->default('belum_ditanggapi');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kritik_sarans');
    }
};

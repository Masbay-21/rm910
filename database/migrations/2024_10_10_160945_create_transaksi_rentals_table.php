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
        Schema::create('transaksi_rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mobil_id')
                ->references('id')->on('mobils')->onUpdate('restrict')->onDelete('restrict');
            $table->foreignId('user_id')
                ->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->date('tgl_peminjaman');
            $table->date('tgl_pengembalian');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_rentals');
    }
};

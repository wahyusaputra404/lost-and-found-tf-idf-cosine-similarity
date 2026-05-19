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
    Schema::create('laporan_barangs', function (Blueprint $table) {
        $table->id();
        $table->enum('jenis_laporan', ['hilang', 'temuan']);
        $table->string('nama_barang');
        $table->text('deskripsi'); // Teks panjang ini yang nanti dihitung pakai TF-IDF & Cosine
        $table->string('lokasi');
        $table->date('tanggal_kejadian');
        $table->enum('status', ['open', 'resolved'])->default('open');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_barangs');
    }
};

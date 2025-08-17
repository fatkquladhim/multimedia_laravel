<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('penyewaan_barang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anggota')->nullable();
            $table->unsignedBigInteger('id_alat')->nullable();
            $table->date('tanggal_sewa')->nullable();
            $table->date('tanggal_kembali')->nullable();
            $table->integer('jumlah')->nullable();
            $table->enum('status', ['disewa','dikembalikan'])->default('disewa');
            $table->decimal('biaya', 10, 2)->nullable();
            $table->enum('tipe_penyewa', ['anggota','umum'])->default('anggota');
            $table->string('nama_penyewa', 100)->nullable();
            $table->string('kontak_penyewa', 25)->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('penyewaan_barang');
    }
};

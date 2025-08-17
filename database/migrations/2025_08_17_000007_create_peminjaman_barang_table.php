<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('peminjaman_barang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anggota')->nullable();
            $table->unsignedBigInteger('id_alat')->nullable();
            $table->date('tanggal_pinjam')->nullable();
            $table->date('tanggal_kembali')->nullable();
            $table->integer('jumlah')->nullable();
            $table->enum('status', ['dipinjam','dikembalikan'])->default('dipinjam');
            $table->enum('tipe_peminjam', ['anggota','umum'])->default('anggota');
            $table->string('nama_peminjam', 100)->nullable();
            $table->string('kontak_peminjam', 25)->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('peminjaman_barang');
    }
};

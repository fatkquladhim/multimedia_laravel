<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('alat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alat', 100);
            $table->integer('jumlah')->default(0);
            $table->string('kondisi', 50)->nullable();
            $table->string('kelompok')->nullable();
            $table->string('milik')->nullable();
            $table->timestamps();
        });

        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('divisi', 100)->nullable();
            $table->unsignedBigInteger('id_user');
            $table->boolean('is_wewenang')->default(0);
            $table->boolean('akses_peminjaman')->default(0);
            $table->boolean('akses_penyewaan')->default(0);
            $table->boolean('akses_daftar_alat')->default(0);
            $table->boolean('akses_beri_tugas')->default(0);
            $table->boolean('akses_tugas_riwayat')->default(0);
            $table->boolean('akses_keuangan')->default(0);
            $table->boolean('akses_portfolio')->default(0);
            $table->boolean('akses_legalisasi')->default(0);
            $table->timestamps();
        });

        Schema::create('izin_malam', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anggota')->nullable();
            $table->date('tanggal')->nullable();
            $table->time('jam_izin')->nullable();
            $table->time('jam_selesai_izin')->nullable();
            $table->text('alasan')->nullable();
            $table->timestamps();
        });

        Schema::create('izin_nugas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anggota')->nullable();
            $table->date('tanggal')->nullable();
            $table->time('jam_izin')->nullable();
            $table->time('jam_selesai_izin')->nullable();
            $table->text('alasan')->nullable();
            $table->timestamps();
        });

        Schema::create('keuangan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->nullable();
            $table->text('keterangan')->nullable();
            $table->integer('pemasukan')->nullable();
            $table->integer('pengeluaran')->nullable();
            $table->integer('saldo')->nullable();
            $table->timestamps();
        });

        Schema::create('legalisasi_laptop', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anggota');
            $table->string('merk', 100);
            $table->string('tipe', 100);
            $table->string('serial_number', 100);
            $table->enum('status', ['Baik','Rusak','Perlu Perbaikan']);
            $table->string('file_bukti')->nullable();
            $table->timestamps();
        });

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

        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->string('nama_lengkap', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('kelas', 100)->nullable();
            $table->string('kamar', 100)->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });

        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 100);
            $table->text('deskripsi')->nullable();
            $table->date('deadline')->nullable();
            $table->unsignedBigInteger('id_pemberi_tugas');
            $table->unsignedBigInteger('id_penerima_tugas');
            $table->enum('status', ['pending','selesai'])->default('pending');
            $table->timestamps();
        });

        Schema::create('tugas_jawaban', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tugas');
            $table->unsignedBigInteger('id_user');
            $table->string('file_jawaban')->nullable();
            $table->string('link_drive')->nullable();
            $table->dateTime('tanggal_submit')->nullable();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50);
            $table->string('password');
            $table->enum('role', ['admin','user'])->default('user');
            $table->string('nama_lengkap', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->dateTime('last_activity')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alat');
        Schema::dropIfExists('anggota');
        Schema::dropIfExists('izin_malam');
        Schema::dropIfExists('izin_nugas');
        Schema::dropIfExists('keuangan');
        Schema::dropIfExists('legalisasi_laptop');
        Schema::dropIfExists('peminjaman_barang');
        Schema::dropIfExists('penyewaan_barang');
        Schema::dropIfExists('profile');
        Schema::dropIfExists('tugas');
        Schema::dropIfExists('tugas_jawaban');
        Schema::dropIfExists('users');
    }
};

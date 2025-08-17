<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('legalisasi_laptop', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anggota');
            $table->string('merk', 100);
            $table->string('tipe', 100);
            $table->string('serial_number', 100);
            $table->enum('status', ['Baik','Rusak','Perlu Perbaikan']);
            $table->string('file_bukti')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('legalisasi_laptop');
    }
};

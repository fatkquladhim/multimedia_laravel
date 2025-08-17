<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
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
    }
    public function down(): void
    {
        Schema::dropIfExists('tugas');
    }
};

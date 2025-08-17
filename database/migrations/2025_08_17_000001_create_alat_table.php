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
    }
    public function down(): void
    {
        Schema::dropIfExists('alat');
    }
};

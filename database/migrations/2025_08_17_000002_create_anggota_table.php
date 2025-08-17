<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('divisi', 100)->nullable();
            $table->unsignedBigInteger('id_user');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};

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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_akademik', 10);
            $table->string('kode_smt', 10);
            $table->string('kelas', 10);
            $table->foreignId('sesi_id')->constrained('sesi')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('matakuliah_id')->constrained('matakuliah')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};

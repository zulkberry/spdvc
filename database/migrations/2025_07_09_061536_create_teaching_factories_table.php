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
    if (!Schema::hasTable('teaching_factories')) {
        Schema::create('teaching_factories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instansi_id');
            $table->string('nama_project');
            $table->text('deskripsi')->nullable();
            $table->string('produk_output')->nullable();
            $table->text('jadwal')->nullable();
            $table->text('evaluasi_terakhir')->nullable();
            $table->timestamps();
        });
    }
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teaching_factories');
    }
};

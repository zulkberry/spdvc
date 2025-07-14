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
        Schema::create('teaching_factories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instansi_id');
            $table->string('nama_project');
            $table->text('deskripsi')->nullable();
            $table->string('produk_output')->nullable();
            $table->text('jadwal')->nullable();
            $table->text('evaluasi_terakhir')->nullable();
            $table->timestamps();

            // Foreign key manual, karena id di sekolah_univ bukan 'id' tapi 'id_instansi'
            $table->foreign('instansi_id')->references('id_instansi')->on('sekolah_univ')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teaching_factories');
    }
};

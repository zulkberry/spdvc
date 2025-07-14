<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sekolah_univs', function (Blueprint $table) {
            $table->id('id_instansi');
            $table->string('nama');
            $table->text('alamat')->nullable();
            $table->enum('tipe', ['SMK', 'Universitas']);
            $table->string('kontak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah_univs');
    }
};

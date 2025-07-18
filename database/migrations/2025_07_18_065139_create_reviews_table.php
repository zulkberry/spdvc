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
    Schema::create('reviews', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Nama narasumber
        $table->string('position')->nullable(); // Jabatan atau institusi
        $table->text('quote'); // Isi testimoni
        $table->tinyInteger('rating')->default(5); // Bintang 1-5
        $table->string('avatar')->nullable(); // Foto profil
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};

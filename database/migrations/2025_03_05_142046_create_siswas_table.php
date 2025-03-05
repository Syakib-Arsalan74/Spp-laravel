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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->integer('nisn')->unique();
            $table->integer('nis');
            $table->string('nama');
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('spp_id');
            $table->string('alamat');
            $table->integer('noTelp');
            $table->timestamps();

            $table->foreign('kelas_id')->references('id')->on('kelass')->onDelete('cascade');
            $table->foreign('spp_id')->references('id')->on('spps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};

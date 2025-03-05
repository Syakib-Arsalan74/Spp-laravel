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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->integer('nisn');
            $table->unsignedBigInteger('spp_id');
            $table->foreignId('petugas_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();

            $table->foreign('nisn')->references('nisn')->on('siswas')->onDelete('cascade');
            $table->foreign('spp_id')->references('spp_id')->on('siswas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};

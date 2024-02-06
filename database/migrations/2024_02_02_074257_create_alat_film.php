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
        Schema::create('alat_film', function (Blueprint $table) {
            $table->id();
            $table->string('img-1')->nullable();
            $table->string('img-2')->nullable();
            $table->string('img-3')->nullable();
            $table->string('img-4')->nullable();
            $table->string('img-5')->nullable();
            $table->string('nama');
            $table->string('harga')->nullable();
            $table->unsignedBigInteger('categories_id');
            $table->enum('status', [1,2])->default(1);
            $table->string('desc');
            $table->timestamps();

            $table->foreign('categories_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat_film');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raihan_suaras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelurahan_id');
            $table->foreign('kelurahan_id')->references('id')->on('data_kelurahans')->onDelete('cascade');
            $table->string('jumlah_suara');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raihan_suaras');
    }
};

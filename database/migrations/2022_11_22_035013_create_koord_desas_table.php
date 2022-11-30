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
        Schema::create('koord_desas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Koord_kecamatan_id');
            $table->foreign('Koord_kecamatan_id')->references('id')->on('Koord_kecamatans')->onDelete('cascade');
            $table->string('nama');
            $table->string('deskripsi');
            $table->string('dapil');
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
        Schema::dropIfExists('koord_desas');
    }
};

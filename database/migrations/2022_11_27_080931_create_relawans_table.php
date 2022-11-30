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
        Schema::create('relawans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Koord_desa_id');
            $table->foreign('Koord_desa_id')->references('id')->on('Koord_desas')->onDelete('cascade');
            $table->foreignId('user_id');
            $table->string('nama');
            $table->string('nik');
            $table->string('nokk');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('status');
            $table->string('jenis');
            $table->string('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('tps');
            $table->string('kelurahan_id');
            $table->string('is_visible')->default('belum');
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
        Schema::dropIfExists('relawans');
    }
};

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
        Schema::create('data_kelurahans', function (Blueprint $table) {
            $table->id();
            $table->string('kabkota');
            $table->string('dapil');  
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('tps');
            $table->string('jumlah');
            $table->string('laki');
            $table->string('perempuan');
            $table->string('target');
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
        Schema::dropIfExists('data_kelurahans');
    }
};

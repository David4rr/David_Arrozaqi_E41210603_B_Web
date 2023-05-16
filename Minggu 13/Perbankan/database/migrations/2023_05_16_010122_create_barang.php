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
        // untuk membuat tabel "nasabah" dalam database.
        Schema::create('nasabah', function (Blueprint $table) {
            $table->bigIncrements('id_nasabah');
            $table->string('nama_nasabah');
            $table->string('peminjaman');
            $table->string('bunga');
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
        Schema::dropIfExists('nasabah');
    }
};

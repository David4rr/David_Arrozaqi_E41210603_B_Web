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
    // digunakan untuk membuat tabel baru dalam database dengan nama 'detail_profiles' dan mendefinisikan struktur kolom-kolom yang ada dalam tabel tersebut.
    public function up()
    {
        Schema::create('detail_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('address');
            $table->string('nomor_tlp');
            $table->date('ttl');
            $table->string('foto');
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
        Schema::dropIfExists('detail_profiles');
    }
};

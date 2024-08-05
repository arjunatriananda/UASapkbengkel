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
        Schema::create('keluhan', function (Blueprint $table) {
            $table->id();
            $table->text('nama_keluhan');
            $table->integer('ongkos');  
            $table->string('no_pol', 50);
            $table->foreign('no_pol')->references('no_pol')->on('kendaraan');
            $table->unsignedBigInteger('id_customer');
            $table->foreign('id_customer')->references('id')->on('customers');
            $table->unsignedBigInteger('id_pegawai');
            $table->foreign('id_pegawai')->references('id')->on('pegawai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhan');
    }
};

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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->string('no_pol', 10)->primary();
            $table->string('no_mesin', 15);
            $table->enum('merek', ['honda', 'yamaha', 'suzuki', 'kawasaki', 'lain']);
            $table->enum('warna', ['Putih', 'Hitam', 'Hijau', 'Biru', 'Merah', 'Lain']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};

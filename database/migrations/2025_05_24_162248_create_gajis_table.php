<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */

    public function up(): void
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->increments('id_gaji');
            $table->integer('id_karyawan')->nullable();
            $table->integer('bulan')->nullable();
            $table->year('tahun')->nullable();
            $table->integer('jumlah_absensi')->nullable();
            $table->decimal('tunjangan', 10, 2)->nullable();
            $table->decimal('total_gaji', 10, 2)->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gajis');
    }
};

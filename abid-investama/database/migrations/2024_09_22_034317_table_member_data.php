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
        if (!Schema::hasTable('member_data')) {
            Schema::create('member_data', function (Blueprint $table) {
                $table->id();
                $table->string('email');
                $table->integer('id_lokasi');
                $table->string('bulan')->nullable();
                $table->string('tahun')->nullable();
                $table->date('tanggal')->nullable();
                $table->string('nama')->nullable();
                $table->string('jenis_kendaraan')->nullable();
                $table->string('no_pol')->nullable();
                $table->string('no_kwt')->nullable();
                $table->date('mulai')->nullable();
                $table->date('akhir')->nullable();
                $table->longText('keterangan')->nullable();
                $table->string('harga')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

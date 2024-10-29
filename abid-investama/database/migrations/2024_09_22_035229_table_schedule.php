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
        if (!Schema::hasTable('schedule')) {
            Schema::create('schedule', function (Blueprint $table) {
                $table->id();
                $table->integer('id_lokasi');
                $table->string('email');
                $table->string('nik')->nullable();
                $table->string('nama')->nullable();
                $table->string('bagian')->nullable();
                $table->string('ploting')->nullable();
                $table->string('hari')->nullable();
                $table->string('bulan')->nullable();
                $table->string('tahun')->nullable();
                $table->date('tanggal')->nullable();
                $table->string('status')->nullable();
                $table->longText('keterangan')->nullable();
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

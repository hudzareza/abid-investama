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
        if (!Schema::hasTable('income_casual')) {
            Schema::create('income_casual', function (Blueprint $table) {
                $table->id();
                $table->string('email');
                $table->integer('id_lokasi');
                $table->string('bulan')->nullable();
                $table->string('tahun')->nullable();
                $table->date('tanggal')->nullable();
                $table->string('no_pol')->nullable();
                $table->datetime('jam_masuk')->nullable();
                $table->datetime('jam_keluar')->nullable();
                $table->string('sakkp')->nullable();
                $table->string('income')->nullable();
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

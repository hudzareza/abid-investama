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
        if (!Schema::hasTable('patty_cash')) {
            Schema::create('patty_cash', function (Blueprint $table) {
                $table->id();
                $table->integer('id_lokasi');
                $table->string('supervisor');
                $table->string('administrasi');
                $table->string('email');
                $table->string('nik')->nullable();
                $table->string('nama')->nullable();
                $table->string('bagian')->nullable();
                $table->string('hari')->nullable();
                $table->string('bulan')->nullable();
                $table->string('tahun')->nullable();
                $table->date('tanggal')->nullable();
                $table->longText('keterangan_pemakaian')->nullable();
                $table->string('saldo')->nullable();
                $table->string('debet')->nullable();
                $table->string('kredit')->nullable();
                $table->string('summary_penerimaan')->nullable();
                $table->string('summary_pemakaian')->nullable();
                $table->string('saldo_akhir')->nullable();
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

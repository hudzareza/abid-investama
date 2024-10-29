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
        if (!Schema::hasTable('income_member')) {
            Schema::create('income_member', function (Blueprint $table) {
                $table->id();
                $table->string('email');
                $table->integer('id_lokasi');
                $table->integer('id_member');
                $table->string('bulan')->nullable();
                $table->string('tahun')->nullable();
                $table->date('tanggal')->nullable();
                $table->string('emoney')->nullable();
                $table->string('flazz')->nullable();
                $table->string('bri')->nullable();
                $table->string('bni')->nullable();
                $table->string('qris')->nullable();
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

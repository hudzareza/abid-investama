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
        if (!Schema::hasTable('company_profile')) {
            Schema::create('company_profile', function (Blueprint $table) {
                $table->id();
                $table->text('filename')->nullable();
                $table->text('about_us')->nullable();
                $table->text('motto')->nullable();
                $table->text('parking_solution')->nullable();
                $table->text('commitment')->nullable();
                $table->text('experience')->nullable();
                $table->text('insurance')->nullable();
                $table->text('technology')->nullable();
                $table->text('agreement')->nullable();
                $table->text('definitive')->nullable();
                $table->text('operating_system')->nullable();
                $table->text('feature_system')->nullable();
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

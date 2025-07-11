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
        Schema::create('bku', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomorbukti')->nullable();
            $table->string('nomorkode')->nullable();
            $table->string('hari')->nullable();
            $table->timestamp('pelunasan')->nullable();
            $table->timestamp('pembelian')->nullable();
            $table->string('uraian')->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('terbilang')->nullable();
            $table->softDeletes()->nullable();
            $table->boolean('active')->default(true)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bku');
    }
};

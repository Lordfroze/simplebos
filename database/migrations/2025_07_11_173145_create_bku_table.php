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
            $table->string('nomorbukti');
            $table->string('nomorkode');
            $table->string('hari');
            $table->string('pelunasan');
            $table->string('pembelian');
            $table->string('uraian');
            $table->integer('jumlah');
            $table->string('terbilang');
            $table->softDeletes();
            $table->boolean('active')->default(true);
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

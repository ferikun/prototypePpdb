<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontaks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sekolah_id')->unique();
            $table->string('telepon')->default('belum ada nomor');
            $table->string('WaSekolah')->default('belum ada nomor');
            $table->string('WaAdmin')->default('belum ada nomor');
            $table->string('WaBp')->default('belum ada nomor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontaks');
    }
};

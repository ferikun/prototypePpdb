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
        Schema::create('asal_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bio_id')->unique();
            $table->string('nama_asal_sekolah');
            $table->string('sktb');
            $table->foreignId('alamat_id');
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
        Schema::dropIfExists('asal_sekolahs');
    }
};

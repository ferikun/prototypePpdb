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
        Schema::create('orang_tuas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->enum('status',['suami','istri']);
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('pekerjaan');
            $table->foreignId('alamat_id');
            $table->string('agama');
            $table->integer('nik');
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
        Schema::dropIfExists('orang_tuas');
    }
};

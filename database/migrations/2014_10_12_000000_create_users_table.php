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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('role',['admin','siswa','waliMurid']);
            $table->string('username');
            $table->string('fullName');
            $table->string('email');
            $table->string('password');
            $table->foreignId('sekolah_id');
            $table->integer('kodeMasuk');
            $table->foreignId('asalSekolah_id');
            $table->foreignId('biodata_id');
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
        Schema::dropIfExists('users');
    }
};

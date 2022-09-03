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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->nullable();
            $table->string('name');
            $table->string('nickname');
            $table->string('nisn');
            $table->enum('gender',['laki-laki','perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('anak_ke');
            $table->foreignId('alamat_id');
            $table->string('no_hp');
            $table->string('status_keluarga');
            $table->string('image')->nullable();
            $table->foreignId('jurusan_id')->nullable();
            $table->foreignId('ruangan_id')->nullable();
            $table->string('gel_daftar')->nullable();
            $table->string('status_pembayaran')->nullable();
            $table->string('status_kelulusan')->nullable();
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
        Schema::dropIfExists('biodatas');
    }
};

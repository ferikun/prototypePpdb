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
            $table->foreignId('user_id')->unique();
            $table->string('name');
            $table->string('nickname');
            $table->string('nisn');
            $table->enum('gender',['laki-laki','perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('anak_ke');
            $table->string('status_keluarga')->default('Anak');
            $table->string('no_hp')->default('Belum Punya Nomor HP');
            $table->foreignId('ppdb_id');
            $table->foreignId('jurusan_id')->nullable();
            $table->foreignId('ruangan_id')->nullable();
            $table->string('image')->nullable();
            $table->enum('status_pembayaran',['0','1'])->default('0');
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

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
            $table->integer('nisn');
            $table->enum('gender',['laki-laki','perempuan']);
            $table->string('placeBorn');
            $table->string('birth');
            $table->string('agama');
            $table->string('statusAnak');
            $table->string('statusKeluarga');
            $table->string('bidangFav');
            $table->string('olahraga');
            $table->string('cita');
            $table->foreignId('alamat_id');
            $table->foreignId('asalSekolah_id'); 
            $table->string('ruangan')->nullable();
            $table->string('status')->nullable();;
            $table->integer('noPeserta')->nullable();;
            $table->string('gelDaftar')->nullable();;
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

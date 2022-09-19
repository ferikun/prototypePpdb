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
        Schema::create('p_p_d_b_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tahunAjaran_id');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->foreignId('gelombang_id');
            $table->integer('kuota');
            $table->enum('tes',[1,0])->default(1);
            $table->date('tgl_ujian')->nullable();
            $table->string('waktu_ujian')->nullable();
            $table->enum('status',[1,0])->default(0);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('p_p_d_b_s');
    }
};

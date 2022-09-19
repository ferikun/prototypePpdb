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
        Schema::create('wali_lains', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bio_id')->unique();
            $table->string('nama_waliLain');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->foreignId('alamat_id');
            $table->string('no_hp')->default('Belum Punya Nomor HP');
            $table->string('statusKeluarga')->default('Wali Murid');
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
        Schema::dropIfExists('wali_lains');
    }
};

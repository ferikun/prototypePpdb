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
        Schema::create('wali_ibus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bio_id');
            $table->string('nama_ibu');
            $table->date('tgl_lahir');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('no_hp');
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
        Schema::dropIfExists('wali_ibus');
    }
};

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
        Schema::create('alamats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('refrence_id');
            $table->string('for');
            $table->text('alamat')->default('Belum ada alamat');
            $table->string('kecamatan')->default('Belum ada Kecamatan');
            $table->string('kabupaten')->default('Belum ada Kabupaten');
            $table->string('provinsi')->default('Belum ada Provinsi');
            $table->string('kode_pos')->default('Belum ada Kode Pos');            
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
        Schema::dropIfExists('alamats');
    }
};

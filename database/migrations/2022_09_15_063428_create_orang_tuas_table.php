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
            $table->foreignId('bio_id');
            $table->string('nama');
            $table->enum('role',['ayah','ibu']);
            $table->string('pekerjaan')->default('Wiraswasta');
            $table->string('telepon')->default('Tidak Punya Nomor telepon');
            $table->date('tgl_lahir');
            $table->string('agama');
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

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
        Schema::create('bios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('akun_id')->unique();
            $table->integer('nisn');
            $table->string('gender');
            $table->string('placeBorn');
            $table->integer('birth');
            $table->string('agama');
            $table->string('statusAnak');
            $table->string('statusKeluarga');
            $table->string('bidangFav');
            $table->string('olahraga');
            $table->string('cita');
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
        Schema::dropIfExists('bios');
    }
};

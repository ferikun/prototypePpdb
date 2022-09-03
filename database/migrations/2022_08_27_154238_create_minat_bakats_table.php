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
        Schema::create('minat_bakats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bio_id');
            $table->string('hobi');
            $table->string('bidang_favorit');
            $table->string('olahraga');
            $table->string('cita_cita');
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
        Schema::dropIfExists('minat_bakats');
    }
};

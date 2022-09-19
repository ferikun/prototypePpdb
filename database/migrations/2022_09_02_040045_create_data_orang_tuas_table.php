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
        Schema::create('data_orang_tuas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('biodata_id');
            $table->enum('role', ['ayah', 'ibu']);
            $table->string('name');
            $table->date('birthday');
            $table->string('religion');
            $table->string('profession');
            $table->string('phone');
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
        Schema::dropIfExists('data_orang_tuas');
    }
};

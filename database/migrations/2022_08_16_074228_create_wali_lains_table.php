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
            $table->foreignId('biodata_id');
            $table->string('role')->nullable();
            $table->string('nik')->nullable();
            $table->string('name')->nullable();
            $table->string('birthplace')->nullable();
            $table->date('birthday')->nullable();
            $table->string('religion')->nullable();
            $table->string('profession')->nullable();
            $table->string('phone')->nullable();;
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

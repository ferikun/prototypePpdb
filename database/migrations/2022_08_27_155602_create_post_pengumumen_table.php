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
        Schema::create('post_pengumumen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ppdb_id');
            $table->string('kategori');
            $table->string('title');
            $table->string('konten');
            $table->string('author');
            $table->timestamp('waktu_post');
            $table->enum('publish',['yes','no'])->default('no');
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
        Schema::dropIfExists('post_pengumumen');
    }
};

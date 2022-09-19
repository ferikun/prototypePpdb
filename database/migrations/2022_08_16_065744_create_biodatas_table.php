<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('nisn');
            $table->string('name');
            $table->string('nickname');
            $table->enum('gender',['Laki-laki','Perempuan']);
            $table->string('birthplace');
            $table->string('birthday');
            $table->string('religion');
            $table->string('anak_ke');
            $table->string('status_keluarga');
            $table->string('jurusan');
            $table->foreignId('ruangan_id')->nullable();
            $table->integer('ppdb_id')->nullable();
            $table->string('status_pembayaran')->nullable();
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
        Schema::dropIfExists('biodatas');
    }
};

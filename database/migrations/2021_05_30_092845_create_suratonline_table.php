<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratonlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratonline', function (Blueprint $table) {
            $table->id();
            $table->integer('NoIdentitas');
            $table->string('name');
            $table->string('Email');
            $table->integer('NoHP');
            $table->string('Alamat');
            $table->string('Jenis');
            $table->string('Pesan');
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
        Schema::dropIfExists('suratonline');
    }
}
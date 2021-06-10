<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_desas', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_penduduk');
            $table->integer('jumlah_kk');
            $table->integer('jumlah_penduduk_laki');
            $table->integer('jumlah_penduduk_wanita');
            $table->float('luas_area');
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
        Schema::dropIfExists('data_desas');
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NongdoTrack extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nongdo_tracks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_track');
            $table->dateTime('time');
            $table->float('NO2', 6, 1);
            $table->float('CO', 6, 1);
            $table->float('PM2_5', 6, 1);
            $table->float('PM10', 6, 1);
            $table->float('SO2', 6, 1);
            $table->float('O3', 6, 1);
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
        Schema::dropIfExists('nongdo_tracks');
    }
}

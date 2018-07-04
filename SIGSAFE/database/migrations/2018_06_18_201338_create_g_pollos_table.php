<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGPollosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_pollos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_galpon')->unsigned();
        });

        Schema::table('g_pollos', function (Blueprint $table){
        $table->foreign('id_galpon')->references('id')->on('galpons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('g_pollos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galpons', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('tope_max');
            $table->string('obs_inicial');
            $table->string('estado');
            $table->float('altura');
            $table->float('anchura');
            $table->string('tipo_galpon');
            $table->integer('id_lote')->unsigned();
        });

        Schema::table('galpons', function (Blueprint $table){

        $table->foreign('id_lote')->references('id')->on('lotes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galpons');
    }
}

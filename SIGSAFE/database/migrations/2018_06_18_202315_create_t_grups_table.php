<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTGrupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_grups', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fecha_inicio');
            $table->integer('id_plan_trat')->unsigned();
            $table->integer('id_galpon')->unsigned();
        });

        Schema::table('t_grups', function (Blueprint $table){
        $table->foreign('id_plan_trat')->references('id')->on('plan_trats')->onDelete('cascade');
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
        Schema::dropIfExists('t_grups');
    }
}

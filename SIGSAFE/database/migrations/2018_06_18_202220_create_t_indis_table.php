<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTIndisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_indis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fecha_inicio');
            $table->integer('id_plan_trat')->unsigned();
            $table->integer('id_ave')->unsigned();
        });

        Schema::table('t_indis', function (Blueprint $table){
        $table->foreign('id_plan_trat')->references('id')->on('plan_trats')->onDelete('cascade');
        $table->foreign('id_ave')->references('id')->on('aves')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_indis');
    }
}

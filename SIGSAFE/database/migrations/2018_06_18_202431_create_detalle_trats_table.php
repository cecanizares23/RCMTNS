<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleTratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_trats', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('dia');
            $table->string('medicamento');
            $table->integer('cant_medica');
            $table->string('tipo_trata');
            $table->integer('id_plan_trat')->unsigned();
        });

         Schema::table('detalle_trats', function (Blueprint $table){
        $table->foreign('id_plan_trat')->references('id')->on('plan_trats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_trats');
    }
}

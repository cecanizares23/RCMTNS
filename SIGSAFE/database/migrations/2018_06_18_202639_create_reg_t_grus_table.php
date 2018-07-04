<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegTGrusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_t_grus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fecha');
            $table->string('medicamento');
            $table->integer('cant_medica');
            $table->string('tipo_trata');
            $table->integer('id_detalle_trat')->unsigned();
            $table->integer('id_t_grup')->unsigned();
            $table->integer('id_galpon')->unsigned();
        });

        Schema::table('reg_t_grus', function (Blueprint $table){
        $table->foreign('id_detalle_trat')->references('id')->on('detalle_trats')->onDelete('cascade');
        $table->foreign('id_t_grup')->references('id')->on('t_grups')->onDelete('cascade');
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
        Schema::dropIfExists('reg_t_grus');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegVasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_vas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fecha');
            $table->string('vacuna');
            $table->integer('cantidad');
            $table->string('observacion');
            $table->integer('id_galpon')->unsigned();
            $table->integer('id_detalle_va')->unsigned();
        });

        Schema::table('reg_vas', function (Blueprint $table){
        $table->foreign('id_galpon')->references('id')->on('galpons')->onDelete('cascade');
        $table->foreign('id_detalle_va')->references('id')->on('detalle_vas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reg_vas');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegAlimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_alims', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fecha');
            $table->integer('cantidad');
            $table->string('observacion');
            $table->integer('id_lote')->unsigned();
            $table->integer('id_detalle_alim')->unsigned();
        });

        Schema::table('reg_alims', function (Blueprint $table){
        $table->foreign('id_lote')->references('id')->on('lotes')->onDelete('cascade');
        $table->foreign('id_detalle_alim')->references('id')->on('detalle_alims')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reg_alims');
    }
}

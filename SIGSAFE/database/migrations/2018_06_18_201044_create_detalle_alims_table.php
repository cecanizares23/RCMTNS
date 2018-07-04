<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleAlimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_alims', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('dia');
            $table->integer('cantidad');
            $table->integer('id_alimento')->unsigned();
            $table->integer('id_etapa_p')->unsigned();
        });

        Schema::table('detalle_alims', function (Blueprint $table){
        $table->foreign('id_alimento')->references('id')->on('alimentos')->onDelete('cascade');
        $table->foreign('id_etapa_p')->references('id')->on('etapa_ps')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_alims');
    }
}

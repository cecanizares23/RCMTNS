<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_vas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('dia');
            $table->string('vacuna');
            $table->integer('cantidad');
            $table->integer('id_tipo_ave')->unsigned();
            $table->integer('id_etapa_p')->unsigned();
        });

        Schema::table('detalle_vas', function (Blueprint $table){
        $table->foreign('id_tipo_ave')->references('id')->on('tipo_aves')->onDelete('cascade');
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
        Schema::dropIfExists('detalle_vas');
    }
}

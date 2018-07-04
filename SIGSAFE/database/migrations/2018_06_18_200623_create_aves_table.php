<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aves', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fecha_ingreso');
            $table->date('fecha_baja')->nullable()->default(null);
            $table->string('obs_inicial');
            $table->float('peso');
            $table->integer('edad');
            $table->String('sexaje');
            $table->integer('id_raza')->unsigned();
            $table->integer('id_galpon')->unsigned();

        });

        Schema::table('aves', function (Blueprint $table){
        $table->foreign('id_raza')->references('id')->on('raza')->onDelete('cascade');
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
        Schema::dropIfExists('aves');
    }
}

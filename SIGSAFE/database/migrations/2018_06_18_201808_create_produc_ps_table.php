<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducPsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produc_ps', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('peso', 3, 2);
            $table->integer('cantidad');
            $table->string('observacion');
            $table->integer('id_g_pone')->unsigned();
            $table->integer('id_cant_h_p')->unsigned();
        });

        Schema::table('produc_ps', function (Blueprint $table){
        $table->foreign('id_g_pone')->references('id')->on('g_pones')->onDelete('cascade');
        $table->foreign('id_cant_h_p')->references('id')->on('cant_h_ps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produc_ps');
    }
}

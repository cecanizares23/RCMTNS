<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducCsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produc_cs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('peso', 3, 2);
            $table->integer('cantidad');
            $table->string('observacion');
            $table->integer('id_g_cod')->unsigned();
            $table->integer('id_cant_h_c')->unsigned();
        });

        Schema::table('produc_cs', function (Blueprint $table){
        $table->foreign('id_g_cod')->references('id')->on('g_cods')->onDelete('cascade');
        $table->foreign('id_cant_h_c')->references('id')->on('cant_h_cs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produc_cs');
    }
}

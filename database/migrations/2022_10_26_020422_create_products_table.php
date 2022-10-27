<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_del_Producto');
            $table->integer('Codigo');
            $table->integer('existencia');
            $table->bigInteger('Bodega_id')->unsigned;
            $table->string('Descripcion');
            $table->string('Estado');
            $table->timestamps();

            $table->foreign('Bodega_id')->references('id')->on('Bodega');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

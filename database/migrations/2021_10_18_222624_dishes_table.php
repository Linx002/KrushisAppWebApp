<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->string('platilloTitulo', 100);
            $table->string('platilloImagen', 20);
            $table->string('platilloDescripcion', 250);
            $table->double('platilloPrecio');
            $table->double('platilloOferta');
            $table->boolean('platilloStatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('platilloTitulo', 100);
            $table->string('platilloImagen', 50);
            $table->string('platilloDescripcion', 250);
            $table->string('platilloTipo', 20);
            $table->double('platilloPrecio', 8, 2);
            $table->double('platilloOferta', 8, 2);
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
        Schema::dropIfExists('menus');
    }
}

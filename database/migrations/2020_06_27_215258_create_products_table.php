<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->timestamps();
            $table->string('titulo');
            $table->float('precio');
            $table->string('descripcion');
            $table->bigInteger("categoria_id")->unsigned()->default("1");
            $table->foreign("categoria_id")->references("id")->on("categorias");
            $table->smallInteger('descuento')->nullable();
            $table->tinyInteger('es_destacado')->default(0);
            $table->string('poster');
            $table->string('poster2')->nullable();
            $table->string('poster3')->nullable();
            $table->string('poster4')->nullable();
            $table->string('poster5')->nullable();
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
}

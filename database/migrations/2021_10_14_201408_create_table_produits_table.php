<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->longText('description')->nullable();
            $table->integer('id_categorie')->unsigned();
            $table->string('letterRange')->nullable();
            $table->integer('id_unitSal')->unsigned();
            $table->string('unitCapacity')->nullable();
            $table->integer('capacityQuantity')->unsigned();
            $table->bigInteger('id_produit_api')->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('produits');
    }
}

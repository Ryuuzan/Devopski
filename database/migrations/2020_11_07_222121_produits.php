<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Produits', function (Blueprint $table){
            $table->increments('id_prod');
            $table->string('prod_nom');
            $table->text('prod_description');
            $table->float('prod_prix', 8, 2);
            $table->integer('prod_stock');
            $table->text('prod_marque');
            $table->text('prod_image');
            $table->foreignId('id_cat');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Produits');
    }
}

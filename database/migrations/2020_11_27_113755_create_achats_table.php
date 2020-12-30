<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Achats', function (Blueprint $table){
            $table->increments('id_achat');
            $table->date('achat_date');
            $table->float('achat_prix_total', 8, 2);
            $table->foreignId('id_client');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Achats');
    }
}

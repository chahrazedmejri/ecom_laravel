<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ordersaffecter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordersaffecter', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->unsignedbiginteger('orderid'); 
           $table->unsignedbiginteger('livreurid');
           $table->text('livreur');
           $table->text('etat')->change();
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

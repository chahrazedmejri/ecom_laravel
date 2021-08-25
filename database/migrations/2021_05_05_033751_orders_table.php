<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigincrements('id'); 
            $table->string('adresse');
            $table->string('adresse2');  
            $table->string('ville'); 
            $table->integer('code');
            $table->integer('tel'); 
            $table->text('infosup');  
           $table->unsignedbiginteger('user_id');
           $table->text('produits'); 
           $table->text('quant');
           $table->text('total');
       
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

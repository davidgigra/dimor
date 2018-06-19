<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createButgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('butgets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('costoDirecto');
            $table->integer('exterioresUrbanismo');
            $table->integer('costoIndirecto'); 
            $table->integer('lote');
            $table->integer('utilidad');
            $table->integer('otros');
            $table->integer('totalProyecto');      
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
        Schema::drop('butgets');
    }
}

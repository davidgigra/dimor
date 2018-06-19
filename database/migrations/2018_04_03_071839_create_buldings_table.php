<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuldingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buldings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',64);
            $table->integer('butget_id')->unsigned();
            $table->string('city',64);
            $table->string('client',64);
            $table->timestamps();

            $table->foreign('butget_id')->references('id')->on('butgets');
        });


        Schema::create('bulding_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('bulding_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('bulding_id')->references('id')->on('buldings');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('buldings');
    }
}

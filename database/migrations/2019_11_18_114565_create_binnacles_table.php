<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinnaclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binnacles', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->string('type');
            $table->string('event');
            $table->integer('belonging_id')->unsigned();
            $table->integer('user_id')->unsigned();

            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('belonging_id')->references('id')->on('belongings')->onDelete('cascade');


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
        Schema::dropIfExists('binnacles');
    }
}

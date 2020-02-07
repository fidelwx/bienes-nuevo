<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInchargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incharges', function (Blueprint $table) {
            $table->increments('id');
            $table->date('appointment_date');
            $table->integer('person_id')->unsigned();
            $table->string('dependence_id');

            $table->foreign('person_id')->references('id')->on('people')->onDelete('cascade');
            $table->foreign('dependence_id')->references('code')->on('dependences')->onDelete('cascade');

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
        Schema::dropIfExists('incharges');
    }
}

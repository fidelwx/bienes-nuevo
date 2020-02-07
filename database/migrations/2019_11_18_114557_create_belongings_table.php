<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBelongingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belongings', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('correlative');
            $table->string('complete_code');
            $table->string('description');
            $table->date('purchase_date');
            $table->integer('quantity');
            $table->string('purchase_order');
            $table->string('serial');
            $table->string('origin');
            $table->float('price');
            $table->string('status');
            $table->string('category_id');
            $table->string('type_id');
            $table->string('dependence_id');

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
        Schema::dropIfExists('belongings');
    }
}

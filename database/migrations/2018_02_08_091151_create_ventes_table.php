<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameDrink');
            $table->integer('sucre');
            $table->integer('prix');
            $table->dateTime('date');
            $table->integer('boisson_id')->unsigned();
            $table->foreign('boisson_id')->references('id')->on('boissons');
            $table->timestamps();
        });

//        schema::table('boissons', function (Blueprint $table)
//        {
//            $table->integer('vente_id')->unsigned()->inex();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventes');
    }
}

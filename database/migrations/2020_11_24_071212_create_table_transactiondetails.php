<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTransactiondetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactiondetails', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('flowerID');
            $table->unsignedInteger('transactionID');
            $table->integer('quantity');
            $table->integer('subTotal');

            $table->foreign('flowerID')->references('id')->on('flowers');
            $table->foreign('transactionID')->references('id')->on('transactions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_transactiondetail');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Purcharse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('purcharses', function (Blueprint $table) {
          $table->increments('id');
          $table->softdeletes();
          $table->timestamps();
          $table->integer('user_id')->unsigned()->index();
          $table->timestamp('transaction_date');
          $table->float('tax',6,2);
          $table->float('charge',6,2);
      });
      Schema::create('purcharses_detail', function (Blueprint $table) {
          $table->increments('id');
          $table->softdeletes();
          $table->timestamps();
          $table->integer('purcharse_id')->unsigned()->index();
          $table->integer('product_id')->unsigned()->index();
          $table->integer('quantity');
          $table->float('tax',6,2);
          $table->float('unit_price',6,2)
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

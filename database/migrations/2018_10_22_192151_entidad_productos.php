<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EntidadProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->string('product_code');
            $table->string('size');
            $table->string('color');
            $table->float('price',6,2);
            $table->float('price_list',6,2);
            $table->Integer('quantity')
            $table->softdeletes();
            $table->tinyInteger('type_id')->unsigned()->index();
            $table->tinyInteger('category_id')->unsigned()->index();
            $table->tinyInteger('subcategory_id')->unsigned()->index();
        });
        Schema::create('categories', function (Blueprint $table) {
          $table->tinyIncrements('id');
          $table->string('name');
          $table->softdeletes();
          $table->timestamps();
        });
        Schema::create('subcategories', function (Blueprint $table) {
          $table->tinyIncrements('id');
          $table->string('name');
          $table->tinyInteger('category_id')->unsigned()->index();
          $table->softdeletes();
          $table->timestamps();
        });
        Schema::create('images', function (Blueprint $table) {
          $table->mediumIncrements('id');
          $table->string('src');
          $table->softdeletes();
          $table->timestamps();
          $table->Integer('product_id')->unsigned()->index();
        });
        Schema::create('types', function (Blueprint $table) {
          $table->tinyIncrements('id');
          $table->string('name');
          $table->softdeletes();
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
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('subcategories');
        Schema::dropIfExists('images');
        Schema::dropIfExists('types');
    }
}

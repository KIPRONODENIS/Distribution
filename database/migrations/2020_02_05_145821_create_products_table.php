<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('name');
            $table->integer('min_order');
            $table->integer('price');
            $table->integer('stock');
            $table->unsignedBigInteger('user_id');
            $table->string('image');
            $table->string('per')->default('item');
            $table->longText('description');
            $table->boolean('instock')->default(true);
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
    }
}

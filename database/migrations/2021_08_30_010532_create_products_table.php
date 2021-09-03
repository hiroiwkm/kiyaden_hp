<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
             $table->text('name');             
             $table->text('detail');             
             $table->integer('category1');             
             $table->integer('category2');             
             $table->integer('category3');             
             $table->integer('category4');             
             $table->integer('category5');             
             $table->integer('price');             
             $table->integer('online_order_flg');             
             $table->text('img_url');             
             $table->integer('cold_delivery');             
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

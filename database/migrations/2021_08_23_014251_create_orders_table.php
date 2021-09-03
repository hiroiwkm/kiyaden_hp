<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('user_id');
             $table->text('deli_address');
             $table->text('deli_recipient');
             $table->text('deli_tel_number');
             $table->text('billing_address');
             $table->text('billing_recipient');
             $table->text('billing_tel_number');
             $table->date('deli_date');
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
        Schema::dropIfExists('orders');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->double('net_value');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('products_id')->nullable();

            $table->foreign('order_id')
            ->references('id')
            ->on('orders')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreign('products_id')
            ->references('id')
            ->on('products')
            ->onDelete('set null')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_product');
    }
};

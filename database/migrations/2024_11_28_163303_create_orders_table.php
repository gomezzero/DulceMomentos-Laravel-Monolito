<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('delivery_date');
            $table->string('description')->nullable();
            $table->string('status');
            $table->unsignedBigInteger('clients_id')->nullable();

            $table->foreign('clients_id')
                ->references('id')
                ->on('clients')
                ->onDelete('set null')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};

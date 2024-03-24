<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('adress')->nullable();
            $table->string('comment')->nullable();
            $table->string('session_id');
            $table->integer('user_id');
            $table->string('pay_order')->nullable()->comment("id оплаты СБЕР");
            $table->integer('pay_status')->nullable()->comment("Статус оплаты СБЕР");
            $table->string('pay_status_text')->nullable()->comment("Статус оплаты СБЕР Комеентарий");
        });

        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
        Schema::dropIfExists('orders');

    }
};

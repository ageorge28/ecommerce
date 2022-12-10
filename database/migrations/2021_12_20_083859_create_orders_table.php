<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('district_id');
            $table->unsignedInteger('state_id');
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('phone', 10);
            $table->unsignedInteger('postcode')->nullable();
            $table->text('notes')->nullable();
            $table->string('payment_type');
            $table->string('payment_method')->nullable();
            $table->string('transaction_id');
            $table->string('currency', 3);
            $table->float('amount', 8, 2);
            $table->string('order_number');
            $table->string('invoice_number');
            $table->string('order_date');
            $table->string('order_month');
            $table->string('order_year');
            $table->string('confirmed_date')->nullable();
            $table->string('processing_date')->nullable();
            $table->string('picked_date')->nullable();
            $table->string('shipped_date')->nullable();
            $table->string('delivered_date')->nullable();
            $table->string('cancel_date')->nullable();
            $table->string('return_date')->nullable();
            $table->string('return_reason')->nullable();
            $table->string('status');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->char('fullname',50);
            $table->char('email');
            $table->char('received_address', 255);
            $table->char('phone',20);
            $table->char('order_code',20);
            $table->decimal('total_amount',10,2);
            $table->integer('status')->default(1);
            $table->integer('payment_method')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

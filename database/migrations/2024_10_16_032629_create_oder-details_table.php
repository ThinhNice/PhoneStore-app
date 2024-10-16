<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Decimal;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order-details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained();
            $table->char('product_img',50);
            $table->char('cur_pr_name',50);
            $table->integer('quantity');
            $table->decimal('cur_pr_price',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order-details');
    }
};

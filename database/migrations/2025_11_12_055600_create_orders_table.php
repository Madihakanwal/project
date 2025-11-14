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
            $table->unsignedBigInteger("user_id");
            $table->integer("order_number");
            $table->decimal("total_amount", 10, 2);
            $table->decimal("discount");
            $table->integer("shipping_cost");
            $table->string("payment_status")->default('unpaid'); // e.g., unpaid, paid, refunded
            $table->string("order_status")->default('pending'); // e.g., pending, completed, cancelled

            $table->integer("shipping_address_id")->nullable();
            $table->string("payment_method")->nullable();
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

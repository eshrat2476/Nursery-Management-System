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
            $table->foreignId('user_id')->constrained('users');
            $table->string('deliverymen')->nullable();
            $table->string('status')->default('pending');
            $table->double('total_price')->default(0.0);
            $table->string('payment_method')->nullable();
            $table->string('address');
            $table->string('receiver_mobile');
            $table->string('receiver_name');
            $table->string('transaction_id');
            $table->string('payment_status')->default('pending');
            $table->string('receiver_email')->nullable();

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

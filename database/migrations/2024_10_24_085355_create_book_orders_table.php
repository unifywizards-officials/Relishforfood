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
        Schema::create('book_orders', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('email')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->longText('catering_items')->nullable();
            $table->longText('special_request')->nullable();
            $table->string('coupon_code')->nullable();
            // $table->string('final_amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_orders');
    }
};

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
        Schema::create('book_catering_services', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_address')->nullable();
            $table->string('po_no')->nullable();
            $table->string('client_phone_no')->nullable();
            $table->string('company_phone_no')->nullable();
            $table->longText('catering_items')->nullable();
            $table->string('delivery_date')->nullable();
            $table->string('delivery_time')->nullable();
            $table->longText('special_dietary_requirement')->nullable();
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
        Schema::dropIfExists('book_catering_services');
    }
};

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
        Schema::create('book_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('email')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('no_of_guest')->nullable();
            $table->string('reservation_type')->nullable();
            $table->longText('special_request')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_tables');
    }
};

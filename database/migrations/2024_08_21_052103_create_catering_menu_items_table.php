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
        Schema::create('catering_menu_items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('catering_menu_id');
            $table->foreign('catering_menu_id')->references('id')->on('catering_menus')->onDelete('cascade')->onUpdate('cascade');
            $table->longText('image')->nullable();
            $table->string('image_alt')->nullable();
            $table->longText('description')->nullable();
            $table->string('price')->default(0);
            $table->string('order_position')->default('0');
            $table->integer('is_popular')->default('1')->comment('1=>yes,2=>no');
            $table->integer('is_active')->default('1')->comment('1=>Active,2=>inActive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catering_menu_items');
    }
};

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
        Schema::create('stocksproduct', function (Blueprint $table) {
            $table->id();
            $table->string("product_id");
            $table->string("product_name");
            $table->string("product_catagory");
            $table->string("product_supplier");
            $table->string("product_origin");
            $table->string("product_color");
            $table->string("image");
            $table->string("product_size");
            $table->string("cost_price")->nullable();
            $table->decimal("sale_price")->nullable();
            $table->integer("added_quantity")->nullable();
            $table->integer("sold_quantity")->nullable();
            $table->integer("return_quantity")->nullable();
            $table->integer("damage_quantity")->nullable();
            $table->integer("stock_quantity")->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocksproduct');
    }
};

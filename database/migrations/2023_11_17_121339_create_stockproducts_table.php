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
        Schema::create('stockproducts', function (Blueprint $table) {
            $table->id();
            $table->string("product_id");
            $table->string("product_name");
            $table->string("product_catagory");
            $table->string("product_supplier");
            $table->string("product_origin");
            $table->string("product_color");
            $table->string("image");
            $table->string("product_size");
            $table->string("cost_price");
            $table->double("sale_price");
            $table->integer("added_quantity");
            $table->integer("sold_quantity");
            $table->integer("return_quantity");
            $table->integer("stock_quantity");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stockproducts');
    }
};

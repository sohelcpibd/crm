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
        Schema::create('cashflows', function (Blueprint $table) {
            $table->id();
            $table->string("order_id");
            $table->string("date");
            $table->string("catagory");
            $table->string("sub_catagory");
            $table->string("description");
            $table->string("total_amount");
            $table->string("discount");
            $table->string("recieved_amount");
            $table->string("balance_due");
            $table->string("payment_amount");
            $table->string("payment_due");
            $table->string("balance");      
            $table->timestamps();



          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashflows');
    }
};

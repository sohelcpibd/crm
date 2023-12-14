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
        Schema::create('investor', function (Blueprint $table) {
            $table->id();
            $table->string('investor_name');
            $table->string('contact_number');
            $table->string('email_address');
            $table->decimal('invest_amount');
            $table->string('rate');
            $table->timestamps();


          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investor');
    }
};

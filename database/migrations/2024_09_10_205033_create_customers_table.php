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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('seat_count');
            $table->integer('price');
            $table->string('b_name');
            $table->string('b_number');
            // $table->integer('bus_id');
            $table->foreignId('customer_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            // $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('b_name');
            $table->string('b_number');
            $table->string('b_type');
            $table->string('from');
            $table->string('to');
            $table->integer('price');
            $table->string('b_image');
            // $table->unsignedBigInteger('c_id');
            $table->foreignId('c_id')->references('id')->on('companies')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('u_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};

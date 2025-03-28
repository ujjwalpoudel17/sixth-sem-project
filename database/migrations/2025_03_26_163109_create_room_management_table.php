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
        Schema::create('room_management', function (Blueprint $table) {
            $table->id();
            $table->string('roomtype');
            $table->text('facilities');
            $table->text('features');
            $table->integer('price');
            $table->integer('discount_price')->nullable();
            $table->text('rules')->nullable();
            $table->text('about')->nullable();
            $table->string('photopath')->nullable();
            $table->string('photopath2')->nullable();
            $table->string('photopath3')->nullable();
            $table->string('photopath4')->nullable();
            $table->foreignId('hotelmanagement_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_management');
    }
};

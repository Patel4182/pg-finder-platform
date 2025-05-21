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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // reference to users
            $table->string('title');
            $table->decimal('price', 8, 2);
            $table->string('location');
            $table->integer('room_size');
            $table->date('available_from');
            $table->text('description');
            $table->json('amenities'); // array like ["WiFi", "AC", "Laundry"]
            $table->json('images'); // array of image paths like ["/uploads/1.jpg", "/uploads/2.jpg"]
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing');
    }
};

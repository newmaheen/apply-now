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
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('title'); // ছবির শিরোনাম বা ক্যাপশন
        $table->string('image_path'); // ছবির পাথ (Storage-এ সেভ হবে)
        $table->string('category')->nullable(); // ক্যাটাগরি বা ট্যাগ (যেমন: Notice, Update)
        $table->boolean('is_active')->default(true); // হোমপেজে দেখাবে কি না
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

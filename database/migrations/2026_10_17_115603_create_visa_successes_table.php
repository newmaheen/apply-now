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
    Schema::create('visa_successes', function (Blueprint $table) {
        $table->id();
        $table->string('title')->nullable(); // যেমন: Indian Tourist Visa
        $table->string('route')->nullable(); // যেমন: By Road Haridaspur / Gede
        $table->date('issue_date')->nullable();
        $table->date('expiry_date')->nullable();
        $table->string('image_path'); // ভিসার ছবি
        $table->boolean('is_active')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_successes');
    }
};

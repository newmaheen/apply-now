<?php

use App\Models\VisaSuccess;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

Route::get('/', function () {
    $visaSuccesses = VisaSuccess::where('is_active', true)
        ->latest()
        ->paginate(6); // ভিসা কার্ড প্রতি পেজে ৬টি

    // টেবিল না থাকলে 500 error এড়াতে সেফ চেক
    $posts = Schema::hasTable('posts') 
        ? Post::where('is_active', true)->latest()->get() 
        : collect(); 

    return view('welcome', compact('visaSuccesses', 'posts'));
});
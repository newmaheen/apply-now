<?php

use App\Models\VisaSuccess;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $visaSuccesses = VisaSuccess::where('is_active', true)
        ->latest()
        ->paginate(6); // ভিসা কার্ড প্রতি পেজে ৬টি

    $posts = Post::where('is_active', true)
        ->latest()
        ->get(); // পোস্ট কার্ডগুলো

    return view('welcome', compact('visaSuccesses', 'posts'));
});
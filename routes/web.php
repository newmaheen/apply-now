<?php

use App\Models\VisaSuccess;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

Route::get('/', function (Request $request) {
    $visaSuccesses = VisaSuccess::where('is_active', true)
        ->latest()
        ->paginate(6); // ভিসা কার্ড প্রতি পেজে ৬টি

    // টেবিল না থাকলে 500 error এড়াতে সেফ চেক
    $posts = Schema::hasTable('posts') 
        ? Post::where('is_active', true)->latest()->get() 
        : collect(); 

    // AJAX রিকোয়েস্ট হলে শুধু পার্টিয়াল ভিউ রিটার্ন করবে
    if ($request->ajax()) {
        return view('partials.visa-success-grid', compact('visaSuccesses'))->render();
    }

    return view('welcome', compact('visaSuccesses', 'posts'));
});
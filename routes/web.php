<?php

use App\Models\VisaSuccess;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $visaSuccesses = VisaSuccess::where('is_active', true)
        ->latest()
        ->get();

    return view('welcome', compact('visaSuccesses'));
});
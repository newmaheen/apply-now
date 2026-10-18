<?php

use App\Models\User;
use App\Models\VisaSuccess;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $visaSuccesses = VisaSuccess::where('is_active', true)
        ->latest()
        ->get();

    return view('welcome', compact('visaSuccesses'));
});

// এডমিন ইউজার তৈরি/পাসওয়ার্ড রিসেটের ওয়ান-টাইম রুট
Route::get('/fix-admin-pass', function () {
    $user = User::updateOrCreate(
        ['email' => 'maheen@gmail.com'],
        [
            'name' => 'Maheen',
            'password' => Hash::make('AdminPass@1234'),
        ]
    );

    return 'Admin user ready! Email: ' . $user->email . ' | Password: AdminPass@1234';
});
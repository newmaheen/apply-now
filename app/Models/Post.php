<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // এই প্রোটেক্টেড প্রপার্টিটুকু যুক্ত করে দিন
    protected $fillable = [
        'title',
        'slug',
        'image_path',
        'category',
        'content',
        'user_id', // যদি ইউজার আইডি বা অন্য কোনো ফিল্ড থাকে
    ];
}
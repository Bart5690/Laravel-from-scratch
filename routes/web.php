<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all() // Corrected here
    ]);
});

Route::get('posts/{post}', function ($slug) {
    return view('post', [
        'post' => Post::findOrFail($slug)
    ]);
});

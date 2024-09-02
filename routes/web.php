<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::all();

    return view('posts', [
        'posts' => Post::all()
]);

});

Route::get ('posts/{post}', function ($slug) {


    $post = Post::find($slug);

    return view('post', [
        'post' => $post
    ]);
})->where('post', '[A-z_\-]+');

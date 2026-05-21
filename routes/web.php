<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function() {
    return view('posts', [
        'posts' => Post::all()
    ]);
});
Route::get('posts/{post}', function($slug) {
    return view('post', [
        'post' => Post::find($slug)
    ]);

})->where('post', '[A-z_\-]+');

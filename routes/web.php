<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about',['name'=>'Ahmaji Setiawan', 'title' =>'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/authors/{user}', function (User $user) {
    return view('posts', ['title' => 'Artikel Dari '. $user->name, 'posts' => $user->posts ]);
});

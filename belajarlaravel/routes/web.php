<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Vale",
        "email" => "tutorvale@vale.com",
        "image" => "img/iso.jpg",
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title"     => "Judul Post 1",
            "slug"      => "Judul-post-pertama",
            "author"    => "Vale II",
            "body"      => "Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Eu lobortis elementum nibh tellus molestie nunc non blandit."
        ],
        [
            "title"     => "Judul Post 2",
            "slug"      => "Judul-post-kedua",
            "author"    => "Vale IV",
            "body"      => "eqweqweqwqeedff dfs sq ASDAS SDSA,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Eu lobortis elementum nibh tellus molestie nunc non blandit."
        ],
    ];

    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title"     => "Judul Post 1",
            "slug"      => "judul-post-pertama",
            "author"    => "Vale II",
            "body"      => "Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Eu lobortis elementum nibh tellus molestie nunc non blandit."
        ],
        [
            "title"     => "Judul Post 2",
            "slug"      => "Judul-post-kedua",
            "author"    => "Vale IV",
            "body"      => "eqweqweqwqeedff dfs sq ASDAS SDSA,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Eu lobortis elementum nibh tellus molestie nunc non blandit."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] == $slug) {
            $new_post[] = $post;
        }
    }
    
    return view('post', [
        "title" => "Single Post",
        "post"  => $new_post
    ]);
});
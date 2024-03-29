<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
        "active" => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        'active' => 'about',
        "name" => "Vale",
        "email" => "tutorvale@vale.com",
        "image" => "img/iso.jpg",
    ]);
});


Route::get('/posts', [PostController::class,'index']);

Route::get('posts/{post:slug}', [PostController::class,'show']);

Route::get('/categories',function() {
    return view('categories', [
        'title'=> 'Post Categories',
        "active"=> 'categories',
        'categories'=> Category::all()
    ]);
});
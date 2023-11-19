<?php

use App\Http\Controllers\PostController;
use App\Models\post;
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
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Azzam Ezra",
        "email" => "azzamezra@gmail.com",
        "img" => "a.png"

    ]);
});


Route::get('/blog', [PostController::class, 'index']);

// halaman single post
Route::get('/post/{slug}', [PostController::class, 'show']);

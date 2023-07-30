<?php

use App\Models\Post;
use App\Models\User;
use App\Models\category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Homepage"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Arya",
        "email" => "arya@gmail.com",
        "image" => "aryaaja.jpg"
    ]);
})->middleware('auth');



Route::get('/blog', [PostController::class, 'index'])->middleware('auth');
//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function()
{
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/blog', DashboardPostController::class)->except([
    'show','destroy', 'edit', 'update'
])->middleware('auth');
Route::get('/dashboard/blog/{post:slug}', [DashboardPostController::class, 'show'])->middleware('auth');
Route::delete('/dashboard/blog/{post:slug}', [DashboardPostController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/blog/{post:slug}/edit', [DashboardPostController::class, 'edit'])->middleware('auth');
Route::get('/dashboard/blog/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::put('/dashboard/blog/{post:slug}', [DashboardPostController::class, 'update'])->middleware('auth');

Route::resource('/dashboard/categories', AdminController::class)->except('show')->middleware('admin');
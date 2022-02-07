<?php

// use App\Models\Post;
// use App\Models\User;

use App\Models\Category;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AnakAsuhController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KebutuhanController;
use App\Http\Controllers\DonasiUserController;
use App\Http\Controllers\UserDonasiController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardPengasuhController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Rizky",
        "email" => "rizkym@gmail.com",
        "image" => "foto.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index'] );
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);

});
// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts',[
//         'title' => "Post by Category: $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts',[
//         'title' => "Post By Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author'),
//     ]);

// });

Route::get('/login', [LoginController::class, "index"])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, "authenticate"]);
Route::post('/logout', [LoginController::class, "logout"]);

Route::get('/register', [RegisterController::class, "index"])->middleware('guest');
Route::post('/register', [RegisterController::class, "store"]);

Route::get('dashboard', function() {
        return view('dashboard.index');
})->middleware('auth');

// Route::get('donasi', [DonasiController::class,'index'])->middleware('auth');
// Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class )->middleware('auth');
Route::resource('/dashboard/anak_asuh', AnakAsuhController::class )->middleware('auth');
Route::resource('/dashboard/anak', AnakController::class )->middleware('admin');

Route::get('/beranda', function () {
    return view('beranda', [
        "title" => 'beranda'
    ]);
});


Route::resource('/dashboard/donasi', DonasiController::class )->middleware('admin   ');
Route::resource('/dashboard/pengasuh', DashboardPengasuhController::class )->middleware('admin');
Route::resource('/dashboard/kebutuhan', KebutuhanController::class )->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')
->middleware('admin');
Route::resource('/donasi/create', DonasiUserController::class )->middleware('auth');
Route::resource('/laporan', LaporanController::class )->middleware('auth');


Route::get('/profile', function () {
    return view('profile', [
        "title" => "profile",
    ]);
});

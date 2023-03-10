<?php

use App\Http\Controllers\BlogsController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

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



// Route::get('/', function () {

//     $posts = Post::all();
//     // dd($posts);

//     return view('index', [
//         'posts' => $posts
//     ]);
// });

// // Route::get('post/{post}', function ($slug) {
// //     $post = Post::find($slug);

// //     return view('post', [
// //         'post' => $post
// //     ]);
// // })->where('post', '[A-z_\-]+'); //regular expression


// Route::get('/', 'App\Http\Controllers\BlogsController@index');
Route::get('/', [BlogsController::class, 'index'])->name('blogs');
Route::get('/search', [BlogsController::class, 'search'])->name('search');
Route::get('/blogs/{blog}', [BlogsController::class, 'viewblog']);
Route::get('/create', [BlogsController::class, 'viewCreate']);
Route::post('/create', [BlogsController::class, 'create']);
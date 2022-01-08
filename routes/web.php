<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Admin\PostController;


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

Route::get('/{any?}', function () {
    return view('app');
})->where('any', '[\/\w\.-]*');

// Route::get('/', function () {
//      return view('app');
// });
// Auth::routes();
// Route::group( ['prefix' => 'admin','middleware' => 'auth','is_admin' ], function()
// {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//     Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
//     Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
//     Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
//     Route::get('/categories/edit', [CategoryController::class, 'store'])->name('categories.edit');
//     Route::put('/categories', [CategoryController::class, 'update'])->name('categories.update');

//     Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
//     Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
//     Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
//     Route::get('/posts/edit', [PostController::class, 'store'])->name('posts.edit');
//     Route::put('/posts', [PostController::class, 'update'])->name('posts.update');
// });

<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\PostAuthorization;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/language/{locale}', [LanguageController::class, 'localeSwitch'])->name('locale');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/users/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/users/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::patch('/users/admin/{user}', [UserController::class, 'admin'])->name('user.admin');
    Route::get('/users/posts/{user}', [UserController::class, 'posts'])->name('user.posts')->withoutMiddleware([AdminMiddleware::class]);
});

Route::middleware('auth')->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('post.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
    Route::get('/posts/view/{post}', [PostController::class, 'view'])->name('post.view');
    Route::post('/posts', [PostController::class, 'store'])->name('post.store');
    Route::get('/posts/{post}', [PostController::class, 'edit'])->name('post.edit')->middleware(PostAuthorization::class);
    Route::patch('/posts/{post}', [PostController::class, 'update'])->name('post.update')->middleware(PostAuthorization::class);
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy')->middleware(PostAuthorization::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/categories/view/{category}', [CategoryController::class, 'view'])->name('category.view');
    Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
    Route::patch('/categories/{category}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
});

Route::post('/editor-uploads', \App\Http\Controllers\EditorImageUploadController::class);

require __DIR__.'/auth.php';

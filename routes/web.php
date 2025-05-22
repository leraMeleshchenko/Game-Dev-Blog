<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// никогда не модет быть два одинаковых метода на один путь.
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');


Route::get('/', [App\Http\Controllers\PostController::class, 'home'])->name('home');

Route::get('/dashboard/message', [App\Http\Controllers\MessageController::class, 'message'])->name('message.message');

Route::post('/dashboard/message', [App\Http\Controllers\MessageController::class, 'store'])->name('message.store');

Route::get('/dashboard/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

Route::get('/dashboard/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');

Route::delete('/dashboard/posts/delete/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/dashboard/posts/{id}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');

Route::post('/dashboard/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

Route::post('/dashboard/posts/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('posts.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

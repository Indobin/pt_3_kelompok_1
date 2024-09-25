<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//user routes
Route::middleware(['auth', 'usersMiddleware'])->group(function(){

    Route::get('dashboard',[UsersController::class, 'index'])->name('dashboard');
});

//admin routes
Route::middleware(['auth', 'adminMiddleware'])->group(function(){

    Route::get('/admin/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');
});

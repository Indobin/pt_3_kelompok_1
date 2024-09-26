<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PusatDaurUlangController as AdminPusatDaurUlangController;
use App\Http\Controllers\Admin\WasteController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KontakKamiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PusatDaurUlangController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\User\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TentangKamiController::class, 'index'])->name('TentangKami');
Route::get('/Layanan', [LayananController::class, 'index'])->name('Layanan');
Route::get('/Blog', [BlogController::class, 'index'])->name('Blog');
Route::get('/KontakKami', [KontakKamiController::class, 'index'])->name('KontakKami');
Route::get('/DaurUlang', [PusatDaurUlangController::class, 'index'])->name('DaurUlang');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

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
    // Route::resource('/admin/waste', WasteController::class);
    Route::resource('/admin/PusatDaurUlang', AdminPusatDaurUlangController::class);
    Route::get('/admin/waste', [WasteController::class, 'index'])->name('admin.waste.index');
    Route::get('/admin/waste/create', [WasteController::class, 'create'])->name('admin.waste.create'); 
    Route::post('/admin/waste', [WasteController::class, 'store'])->name('admin.waste.store'); 
    Route::get('/admin/waste/{id}', [WasteController::class, 'show'])->name('admin.waste.show'); 
    Route::get('/admin/waste/{id}/edit', [WasteController::class, 'edit'])->name('admin.waste.edit'); 
    Route::put('/admin/waste/{id}', [WasteController::class, 'update'])->name('admin.waste.update'); 
    Route::delete('/admin/waste/{id}', [WasteController::class, 'destroy'])->name('admin.waste.destroy'); 
});
